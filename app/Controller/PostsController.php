<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

	public $components = array('Paginator', 'Session','RequestHandler');

	public $uses = array('Post', 'Friend', 'User', 'Comment','Like');

	

	public function index(){
			//procura os posts em que o utilizador em sessão fez 'Like'
			$likes = $this->Like->find('all', array(
				'conditions' => array('Like.username' => $this->Auth->user('username'))
				));

			$this->set('likes',$likes);
		
			//se o Post tiver conteúdo, introduzi-lo na BD
			if(array_key_exists('Post', $this->request->data))
			{
				if ($this->request->is('post')) {
					$this->Post->create();
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
						debug($this->Post->invalidFields());
						return false;
					}
				}
				
			}
		
			//se o Comment tiver conteúdo, introduzi-lo na BD
			else if(array_key_exists('Comment',$this->request->data))
			{
				if($this->request->is('post')){
					$this->Comment->create();
					if ($this->Comment->save($this->request->data)) {
							$this->Session->setFlash(__('O seu comentário foi feito com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
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

		$friends = $this->Friend->find('all', array(
					'conditions' => array('OR' =>
						array(
							'Friend.accepted' => 1,
							'Friend.user1' => $this->Auth->user('username')
							),
						array(
							'Friend.accepted' => 1,
							'Friend.user2' => $this->Auth->user('username')
							)
								)
					)
				);
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
		//procura por todos os posts dos amigos e ordena por ordem crescente de data
		if(isset($friend_list)){
			$friend_posts=$this->Post->find('all', array(
			    'conditions' => array(
			        "Post.user" => $friend_list
			    ),
			     'order' => array('Post.datemade' => 'DESC')
			));

			$this->set('friend_posts', $friend_posts);
		}

		//procura por todos os comentários nos posts dos amigos e ordena por ordem crescente de data
		if(isset($friend_posts)){
			for($i=0; $i<count($friend_posts); $i++)
			{
				$comments=$this->Comment->find('all', array(
					'Comment.post' => $friend_posts[$i]['Post']['id'],
					'order' => 'Comment.datemade'
				));
				$friend_plist[$i]=$friend_posts[$i]['Post']['user'];
			}
			$this->set('comments', $comments);
			$this->set('friend_plist', $friend_plist);
		}

		//procura pela informação de utilizador relativa a todos os amigos
		if(isset($friend_posts)){
			foreach($friend_posts as $post){
				$friend_info=$this->User->find('all', array(
						'conditions' => array('User.username'=> $friend_plist)
				));
			}
			$this->set('friend_info', $friend_info);
		}

		//procura por todos os amigos que tem posts
		if(isset($friend_posts)){
			for($i=0; $i<count($friend_posts); $i++){
				for($j=0; $j<count($friend_info); $j++){
					if($friend_posts[$i]['Post']['user']==$friend_info[$j]['User']['username']){
						$user_friend[$i] = $friend_info[$j];
					}
				}
			}
			$this->set('user_friend', $user_friend);
		}

		//procura a informação dos users que fizeram comments 
		if(isset($comments)){
			for($i=0; $i<count($comments); $i++){
				$user_comment=$this->User->find('all', array(
					'conditions' => array('User.username' => $comments[$i]['Comment']['user']
				)));
			}
			$this->set('user_comment', $user_comment);
		}

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
		
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));

		//procurar informação sobre o post em questão
		$current_post = $this->Post->find('all', array(
		'conditions' => array('Post.id' => $id)
		));
		if(isset($current_post))
			$this->set('current_post', $current_post);


		//procurar informação do utilizador em sessão
		$user = $this->User->find('all', array(
			'conditions' => array('User.username' => $this->Auth->user('username'))
		));
		if(isset($user))
			$this->set('user', $user);

		//procurar todos os comentários relacionados com este post
		$comments = $this->Comment->find('all', array(
			'conditions' => array(
			'Comment.post' => $current_post[0]['Post']['id']),
			'order' => 'Comment.datemade'
		));
		if(isset($comments))
			$this->set('comments', $comments);
		
		//procurar informação dos utilizadores responsaveis pelos comentários
		for($i=0; $i<count($comments); $i++){
			$user_comment = $this->User->find('all', array(
				'conditions' => array('User.username' => $comments[$i]['Comment']['user'])
			));
		}
		if(isset($user_comment))
			$this->set('user_comment', $user_comment);

		//procurar id's e títulos de todos os posts do utilizadr
		/*$all_posts = $this->Post->find('all', array(
		'conditions' => array('Post.user' => $this->Auth->user('username')),
			'fields' => array('id','title')
		));
		if(isset($all_posts))
			$this->set('all_posts', $all_posts);
		//debug($all_posts);*/
		
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('O seu comentário foi introduzido com sucesso.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
					));
				return $this->redirect(array('action' => '/view/'.$this->request->data['Comment']['post']));
			} else {
				$this->Session->setFlash(__('A introdução do seu comentário falhou. Tente novamente'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
				));
				//debug($this->Comment->invalidFields());
				return false;
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
