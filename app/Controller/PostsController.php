<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

	public $components = array('Paginator', 'Session','RequestHandler');

	public $uses = array('Post', 'Friend', 'User', 'Comment','Like');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('initDB'); // We can remove this line after we're finished
	    $this->Auth->allow('index');
	}

	public function index(){
			//procura os posts em que o utilizador em sessão fez 'Like'
			$likes = $this->Post->countAllLikes($this->Auth->user('username'));

			$this->set('likes',$likes);
		
			//se o Post tiver conteúdo, introduzi-lo na BD
			if(array_key_exists('Post', $this->request->data))
			{
				if ($this->request->is('post')) {
					$this->Post->create();

					$this->request->data['Post']['datemade']=date('Y-m-d H:i:s');
					if ($this->Post->save($this->request->data)) {
							$this->Session->setFlash(__('O seu post foi criado com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
						return $this->redirect(array('action' => '/'));
					} else {
						$this->Session->setFlash(__('A introdução do seu post falhou.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
						return false;
					}
				}
				
			}
		
			//se o Comment tiver conteúdo, introduzi-lo na BD
			else if(array_key_exists('Comment',$this->request->data))
			{
				if($this->request->is('post')){
					$this->Comment->create();

					$this->request->data['Comment']['datemade']=date('Y-m-d H:i:s');
					if ($this->Comment->save($this->request->data)) {
							$this->Session->setFlash(__('O seu comentário foi feito com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
							$friend_username = $this->Post->findUsernameByPostId($this->request->data['Comment']['post']);
							//debug($friend_username);
							/*Guarda actividade na bd*/
							$this->Activity->create();
							$this->request->data['Activity']['activity_id']=$this->request->data['Comment']['post'];
							$this->request->data['Activity']['type']='comment';
							$this->request->data['Activity']['username']=$this->Auth->user('username');
							$this->request->data['Activity']['friend_username']=$friend_username['Post']['user'];
							$this->request->data['Activity']['datemade']=date('Y-m-d H:i:s');
							$this->request->data['Activity']['checked']=0;

							if($this->Activity->save($this->request->data)) {
								$this->Session->setFlash(__('Actividade registada.'), 'alert', array(
								'plugin' => 'BoostCake',
								'class' => 'alert-success'
								));
							}
						return $this->redirect(array('action' => '/'));
					} else {
						$this->Session->setFlash(__('A introdução do seu comentário falhou.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-danger'
						));
						//debug($this->Comment->invalidFields());
						return false;
					}
				}
			}
			//se for um Like
			else if(array_key_exists('Like',$this->request->data)){
				if ($this->request->is('post')) {
					$this->Like->create();
					if ($this->Like->save($this->request->data)) {
						$this->Session->setFlash(__('Like inserido.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
						$friend_username = $this->Post->findUsernameByPostId($this->request->data['Like']['post_id']);
						
						/*Guarda actividade na bd*/
						$this->Activity->create();
						$this->request->data['Activity']['activity_id']=$this->Like->id;
						$this->request->data['Activity']['type']='like';
						$this->request->data['Activity']['username']=$this->Auth->user('username');
						$this->request->data['Activity']['friend_username']=$friend_username['Post']['user'];
						$this->request->data['Activity']['datemade']=date('Y-m-d H:i:s');
						$this->request->data['Activity']['checked']=0;

						if($this->Activity->save($this->request->data)) {
							$this->Session->setFlash(__('Actividade registada.'), 'alert', array(
							'plugin' => 'BoostCake',
							'class' => 'alert-success'
							));
						}
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('Like inserido não inserido.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-danger'
						));
					}
				}
			}
		
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());

		/*Lista de amigos*/
		$conditions = array(
						'Friend.accepted' => 1,
						'OR' => array(
			                        'Friend.user1' => $this->Auth->user('username'),
			                        'Friend.user2' => $this->Auth->user('username')
			                        )
			        );

		$friends = $this->Friend->find('all', array(
		        'conditions' => $conditions
		));
		//debug($friends);
		//adiciona username de amigos a uma lista simples
		if(isset($friends)){
			$this->set('friends', $friends);	
			for($i=0; $i<count($friends); $i++)
			{
				//se não for o utilizador em sessão guarda o seu username
				if($friends[$i]['Friend']['user1'] == $this->Auth->user('username'))
				 $friend_list[$i]=$friends[$i]['Friend']['user2'];
				else
					$friend_list[$i]=$friends[$i]['Friend']['user1'];
			}
		}

		//debug($friend_list);
		//procura por todos os posts dos amigos e ordena por ordem crescente de data
		if(isset($friend_list)){
			$friend_posts=$this->Post->find('all', array(
			    'conditions' => array(
			        "Post.user" => $friend_list
			    ),
			     'order' => array('Post.datemade' => 'DESC')
			));

			if(isset($friend_posts)) $this->set('friend_posts', $friend_posts); 

			//debug($friend_posts);
		}
		//procura por todos os comentários nos posts dos amigos e ordena por ordem crescente de data
		if(isset($friend_posts)){

			$friend_posts_id = Hash::extract($friend_posts, '{n}.Post.id');
			//debug($friend_posts_id);
			$comments=$this->Comment->find('all', array(
				'conditions' => array(
						'Comment.post' => $friend_posts_id),
				'order' => array('Comment.datemade')
			));
			//debug($comments);
			//$friend_plist = Hash::extract($friend_posts, '{s}.Post.user');
			
			for($i=0; $i<count($friend_posts); $i++)
			{
				
				$friend_plist[$i]=$friend_posts[$i]['Post']['user'];
			}
			if(isset($comments)) $this->set('comments', $comments);
			if(isset($friend_plist)) $this->set('friend_plist', $friend_plist);
			//debug($comments);
			//debug($friend_plist);
		}

		//procura pela informação de utilizador relativa a todos os amigos
		if(isset($friend_plist)){
				$friend_info=$this->User->find('all', array(
						'conditions' => array('User.username'=> $friend_plist)
				));
			
			if(isset($friend_info))$this->set('friend_info', $friend_info);
			//debug($friend_info);
		}
		//debug($friend_posts);
		//debug($friend_info);
		//procura por todos os amigos que tem posts
		if(isset($friend_posts) && isset($friend_info)){
			for($i=0; $i<count($friend_posts); $i++){
				for($j=0; $j<count($friend_info); $j++){
					if($friend_posts[$i]['Post']['user']==$friend_info[$j]['User']['username']){
						$user_friend[$i] = $friend_info[$j];
					}
				}
			}
			//$user_friend = !array_diff($friend_posts, $friend_info);

			if(isset($user_friend)) $this->set('user_friend', $user_friend);
			//debug($user_friend);
		}
		//debug($comments);
		//procura a informação dos users que fizeram comments 
		if(isset($comments)){
			
			$comments_list = Hash::extract($comments, '{n}.Comment.user');
			//debug($comments_list);
			$user_comment=$this->User->find('all', array(
					'conditions' => array('User.username' => $comments_list),
						'fields' => 'User.username, User.picture, User.last_name, User.first_name'
				));


			if(isset($user_comment))$this->set('user_comment', $user_comment);
		}
		//debug($comments);
		//debug($user_comment);


		//conta os likes de cada post
		if(isset($friend_posts)){
			for($i=0; $i<count($friend_posts); $i++){		
				 $likes_count[$i] = $this->Like->find('count', array(
				'conditions' => array('Like.post_id' => $friend_posts[$i]['Post']['id'])));
			}
		}

		if(isset($likes_count)){
			$this->set('likes_count', $likes_count);
		}

			
	}

	public function myposts(){
		$posts = $this->Post->find('all', array(
			'conditions' => array('Post.user' => $this->Auth->user('username'))
		));
		$user = $this->User->find('all', array(
			'conditions' => array('User.username' => $this->Auth->user('username'))
		));
		$this->set('user', $user);
		$this->set('posts', $posts);
	}

	public function view($id=null){
		if (!$this->Post->exists($id)) {
				throw new NotFoundException(__('Invalid post'));
		}

		//username do utilizador da view requisitada
		$username= $this->Post->findUsernameByPostId($id);
		//debug($username);
		/*Procura lista de amigos do utilizador em sessão (apenas pode aceder ao perfil de amigos)*/
		$friends_username = $this->Friend->findUserFriends($this->Auth->user('username'));
		//debug($friends_username);
		/*Retorna verdadeiro se utilizador for encontrado na lista de amigos*/
		$is_friend=$this->Friend->isFriend($friends_username, $username['Post']['user']);
		//debug($is_friend);
		if($username['Post']['user'] == $this->Auth->user('username'))
			$is_friend=TRUE;
		//se não for utilizador em sessão ou amigo dele redirecciona p/ página 404
		if(!$is_friend) throw new ForbiddenException();

		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));

		//$likes = $this->Post->countAllLikes($this->Auth->user('username'));
		$likes = $this->Post->findIfPostLiked($this->Auth->user('username'), $id);
		//debug($id);
		$this->set('likes',$likes);
		//debug($likes);

		//procurar informação sobre o post em questão
		$current_post = $this->Post->find('first', array(
		'conditions' => array('Post.id' => $id)
		));
		if(isset($current_post))
			$this->set('current_post', $current_post);
		
		//procurar informação do utilizador da view
		$user = $this->User->find('first', array(
			'conditions' => array('User.username' => $username['Post']['user'])
		));
		if(isset($user))
			$this->set('user', $user);

		//procurar todos os comentários relacionados com este post
		$comments = $this->Comment->find('all', array(
			'conditions' => array(
			'Comment.post' => $current_post['Post']['id']),
			'fields' => 'Comment.user, Comment.datemade,Comment.id,Comment.content',
			'order' => 'Comment.datemade'
		));
		if(isset($comments))
			$this->set('comments', $comments);
		//debug($comments);
		//procurar informação dos utilizadores responsaveis pelos comentários
		for($i=0; $i<count($comments); $i++){
			$user_comment[$i] = $this->User->find('all', array(
				'conditions' => array('User.username' => $comments[$i]['Comment']['user']),
				'fields' => 'User.picture,User.first_name,User.last_name'
			));
		}
		if(isset($user_comment))
			$this->set('user_comment', $user_comment);
		//debug($user_comment);

		$likes_count = $this->Like->find('count', array(
			'conditions' => array(
				'Like.post_id' => $current_post['Post']['id']
			)));
		if(isset($likes_count))
			$this->set('likes_count', $likes_count);
		//debug($likes_count);

		if ($this->request->is('post')) {
			/*Se for um comentário*/
			if(array_key_exists('Comment',$this->request->data)){
				$this->Comment->create();
				debug($this->request->data);
				$post_id=$this->request->data['Comment']['post'];
				$this->request->data['Comment']['datemade']=date('Y-m-d H:i:s');
				if ($this->Comment->save($this->request->data)) {
					$this->Session->setFlash(__('O seu comentário foi introduzido com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));

					$friend_username = $this->Post->findUsernameByPostId($this->request->data['Comment']['post']);
					
					/*Guarda actividade na bd*/
					$this->Activity->create();
					$this->request->data['Activity']['activity_id']=$this->request->data['Comment']['post'];
					$this->request->data['Activity']['type']='comment';
					$this->request->data['Activity']['username']=$this->Auth->user('username');
					$this->request->data['Activity']['friend_username']=$friend_username['Post']['user'];		
					$this->request->data['Activity']['datemade']=date('Y-m-d H:i:s');
					$this->request->data['Activity']['checked']=0;

					if($this->Activity->save($this->request->data)) {
						$this->Session->setFlash(__('Actividade registada.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
					}
					return $this->redirect(array('action' => '/view/'.$post_id));
				} else {
					$this->Session->setFlash(__('A introdução do seu comentário falhou. Tente novamente'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
					return false;
				}

			}
			/*Se for um Like*/
			else if(array_key_exists('Like',$this->request->data)){
				$this->Like->create();
				//debug($this->request->data);
				$post_id=$this->request->data['Like']['post_id'];
				if ($this->Like->save($this->request->data)) {
					$this->Session->setFlash(__('O seu like foi introduzido com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));

					$friend_username = $this->Post->findUsernameByPostId($post_id);
					
					/*Guarda actividade na bd*/
					$this->Activity->create();
					$this->request->data['Activity']['activity_id']=$post_id;
					$this->request->data['Activity']['type']='like';
					$this->request->data['Activity']['username']=$this->Auth->user('username');
					$this->request->data['Activity']['friend_username']=$friend_username['Post']['user'];		
					$this->request->data['Activity']['datemade']=date('Y-m-d H:i:s');
					$this->request->data['Activity']['checked']=0;

					if($this->Activity->save($this->request->data)) {
						$this->Session->setFlash(__('Actividade registada.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
					}
					return $this->redirect(array('action' => '/view/'.$post_id));
				} else {
					$this->Session->setFlash(__('A introdução do seu like falhou. Tente novamente'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
					return false;
				}
			}
		}
		
	}

	/**
	 * deleteComment method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function delete($id = null) {
			$this->Post->id = $id;
			if (!$this->Post->exists()) {
				throw new NotFoundException(__('Invalid post'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Post->delete()) {

				$this->Session->setFlash(__('O seu post foi removido.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-success'
			));
				return $this->redirect(array('action' => 'myposts'));

			} else {

					$this->Session->setFlash(__('O seu post não pôde ser removido.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
				));
					return $this->redirect(array('action' => 'myposts'));

			}
		}


		public function deleteComment($id = null) {
				$this->Comment->id = $id;
				if (!$this->Comment->exists()) {
					throw new NotFoundException(__('Invalid comment'));
				}
				$this->request->allowMethod('post', 'delete');
				if ($this->Comment->delete()) {

					$this->Session->setFlash(__('O seu comentário foi removido.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-success'
				));
					return $this->redirect(array('action' => '/'));

				} else {

						$this->Session->setFlash(__('O seu comentário não pôde ser removido.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
						return $this->redirect(array('action' => '/'));

				}
			}

			public function deleteCommentInPost($id = null) {
					$this->Comment->id = $id;
					if (!$this->Comment->exists()) {
						throw new NotFoundException(__('Invalid comment'));
					}
					$this->request->allowMethod('post', 'delete');
					if ($this->Comment->delete()) {

						$this->Session->setFlash(__('O seu comentário foi removido.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
					));
						return $this->redirect(array('action' => '/myposts'));

					} else {

							$this->Session->setFlash(__('O seu comentário não pôde ser removido.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-danger'
						));
							
							return $this->redirect(array('action' => '/myposts'));

					}
				}

		/**
		 * deleteComment method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
			public function deleteLike($id = null) {
				$this->Like->id = $id;
				if (!$this->Like->exists()) {
					throw new NotFoundException(__('Invalid like'));
				}
				$this->request->allowMethod('post', 'delete');
				if ($this->Like->delete()) {

					$this->Session->setFlash(__('O seu like foi removido.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-success'
				));
					//$like=$this->Like->findById($id);
					//debug($like);
					//return $this->redirect(array('controller'=>'posts','action' => '/view/'.$like['0']['Like']['post_id']));
					return $this->redirect(array('action' => '/'));
				} else {

						$this->Session->setFlash(__('O seu like não pôde ser removido.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
						return $this->redirect(array('action' => '/'));

				}
			}


	/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}*/
	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('O seu comment foi inserido com sucesso.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-success'
			));
				return $this->redirect(array('action' => '/'));
			} else {
				$this->Session->setFlash(__('O seu comment falhou.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-danger'
			));
			}
		}
	}

}
