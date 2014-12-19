<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

	public $components = array('Paginator', 'Session');

	public $uses = array('Post', 'Friend', 'User', 'Comment');

	public function index(){

		
			//se o Post tiver conteúdo, introduzi-lo na BD
			//if($this->request->data['Post']['content']!='')array_key_exists
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
				if($this->request->allowMethod('delete')){
					if ($this->Post->delete()) {
						$this->Session->setFlash(__('O post foi removido.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
					} else {
						$this->Session->setFlash(__('O post não pôde ser removido.'), 'alert', array(
							'plugin' => 'BoostCake',
							'class' => 'alert-danger'
							));
					}
					return $this->redirect(array('action' => 'index'));
				}
			}
		
			//se o Comment tiver conteúdo, introduzi-lo na BD
			if(array_key_exists('Comment',$this->request->data))
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
						debug($this->Comment->invalidFields());
						return false;
					}
				}
				if($this->request->allowMethod('post', 'delete')){
					if ($this->Comment->delete()) {
						$this->Session->setFlash(__('O seu comentário foi removido.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
					} else {
						$this->Session->setFlash(__('O seu comentário não pôde ser removido.'), 'alert', array(
							'plugin' => 'BoostCake',
							'class' => 'alert-danger'
							));
					}
					return $this->redirect(array('action' => 'index'));
				}
			}
		



		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());

		$friends = $this->Friend->find('all', array(
			'fields' => 'Friend.user2',
			'conditions' => array('Friend.user1' => $this->Auth->user('username'))
		));
		
		//adiciona username de amigos a uma lista simples
		if(isset($friends)){
			$this->set('friends', $friends);	
			for($i=0; $i<count($friends); $i++)
			{
				 $friend_list[$i]=$friends[$i]['Friend']['user2'];
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
		

		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('A introdução do seu comment foi feita com sucesso.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
					));
				return $this->redirect(array('action' => '/'));
			} else {
				$this->Session->setFlash(__('A introdução do seu comment falhou.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
				));
				debug($this->Comment->invalidFields());
				return false;
			}
		}

		//
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));

		//
		$current_post = $this->Post->find('all', array(
		'conditions' => array('Post.id' => $id)
		));
		$this->set('current_post', $current_post);

		//
		$user = $this->User->find('all', array(
			'conditions' => array('User.username' => $this->Auth->user('username'))
		));
		$this->set('user', $user);

		//
		$comments = $this->Comment->find('all', array(
			'Comment.post' => $current_post[0]['Post']['id'],
			'order' => 'Comment.datemade'
		));
		$this->set('comments', $comments);

		//
		for($i=0; $i<count($comments); $i++){
			$user_comment = $this->User->find('all', array(
				'conditions' => array('User.username' => $comments[$i]['Comment']['user'])
			));
		}
		$this->set('user_comment', $user_comment);

		
		
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function delete($id = null) {

			$this->autoRender = false;

			if(array_key_exists('Post', $this->request->data))
			{
				

				if($this->request->allowMethod('post', 'delete')){
					if ($this->Post->delete()) {
						$this->Session->setFlash(__('O post foi removido.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('O post não pôde ser removido.'), 'alert', array(
							'plugin' => 'BoostCake',
							'class' => 'alert-danger'
							));
						return $this->redirect(array('action' => 'index'));
					}
				}
			}
			if(array_key_exists('Comment', $this->request->data))
			{
				
				if($this->request->allowMethod('post', 'delete')){
					if ($this->Comment->delete()) {
						$this->Session->setFlash(__('O seu comentário foi removido.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('O seu comentário não pôde ser removido.'), 'alert', array(
							'plugin' => 'BoostCake',
							'class' => 'alert-danger'
							));
						return $this->redirect(array('action' => 'index'));
					}
					return $this->redirect(array('action' => 'index'));
				}
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
			'class' => 'alert-danger'
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
