	<?php
	App::uses('AppController', 'Controller');
	/**
	 * Users Controller
	 *
	 * @property User $User
	 * @property PaginatorComponent $Paginator
	 * @property SessionComponent $Session
	 */
	class UsersController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');

	public $uses = array('User','Friend','Item','Wishlist', 'Activity');

	public function beforeFilter() {
		parent::beforeFilter();
	    // Allow any user to login, logout and signup
		$this->Auth->allow('login','signup', 'logout');

	}

	public function login() {
		$this->layout = false;
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->loginRedirect);
			}
			$this->Session->setFlash(__('A sua password e/ou nome de utilizador estão incorretos.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-danger'
			));
		}
	}

	public function logout() {
		$this->layout = false;
		return $this->redirect($this->Auth->logoutRedirect);
	}

	

	public function lock() {
		$user = $this->User->find('all', array(
				'fields' => array('User.username', 'User.first_name', 'User.last_name', 'User.email'),
				'conditions' => array('User.username' => $this->Auth->user('username'))
				));
		$this->set('user', $user);

		$this->layout = false;
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->loginRedirect);
			}
			$this->Session->setFlash(__('A sua password está incorreta.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-danger'
			));
		}
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function signup() {
		$this->layout = false;

		$this->Session->setFlash(__('Mensagem de sucesso!'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-success'
		));

		if ($this->request->is('post')) {

			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this->layout = false;
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * addFriend method
	 *
	 * @return void
	 */
	public function addFriend() {
		$this->layout = false;
		if ($this->request->is('post')) {
			$this->Friend->create();
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('The friend request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend request could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * index method
	 *
	 * @return void
	 */

	public function index() {

		$this->paginate = array(
		      'conditions' => array('User.username !=' => $this->Auth->user('username')),
		      'limit' => 4
		  );
		  $users = $this->paginate('User');
		  $this->set(compact('users'));
		

		$friends = $this->Friend->find('all', array(
			'fields' => array('Friend.user2', 'Friend.accepted'),
			'conditions' => array('Friend.user1' => $this->Auth->user('username'))
			));


		$this->set('friends', $friends);
			for($i=0; $i<count($friends); $i++){
			$friend_info[$i] = $this->User->find('all', array(
				'fields' => array('User.username'),
				'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
				));
		}
		if(isset($friend_info))
			$this->set('friend_info',$friend_info);

		$this->set('user_in_session',$this->Auth->user('username'));
		
		if ($this->request->is('post')) {
			$this->Friend->create();
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('O seu pedido de amizade foi enviado.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-succes'
				));
				$this->Activity->create();

				$this->request->data['Activity']['type']='add';
				//$this->request->data['Activity']['activity_id']=$this->request->data['Friend']['id'];
				$this->request->data['Activity']['username']=$this->Auth->user('username');
				$this->request->data['Activity']['friend_username']=$this->data['Friend']['user2'];
				$this->request->data['Activity']['checked']='0';

				if($this->Activity->save($this->request->data)) {
					$this->Session->setFlash(__('Actividade registada.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-succes'
					));
					return $this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The friend could not be saved. Please, try again.'));
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
		public function view($id = null) {
			if (!$this->User->exists($id)) {
				throw new NotFoundException(__('Invalid user'));
			}

			//find user
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->set('user', $this->User->find('first', $options));
			$current_user = $this->User->find('all', array(
			'conditions' => array('User.id' => $id)
			));

			//find user friends
			$friends = $this->Friend->find('all', array(
			'conditions' => array('Friend.user1' => $current_user[0]['User']['username'])
			));
			$this->set('friends', $friends);

			//find friend user info
			for($i=0; $i<count($friends); $i++){
				$friend_info[$i] = $this->User->find('all', array(
				'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
				));
			}
			if(isset($friend_info))
				$this->set('friend_info',$friend_info);

			//find items associated to the user in session
			$items = $this->Item->find('all', array(
				'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price', 'Item.id'),
				'conditions' => array('Item.user' => $current_user[0]['User']['username'])
			));
			$this->set('items', $items);

			//find session user wishlist items id's
			$wishlist_items = $this->Wishlist->find('all', array(
				'fields' => array('Wishlist.product_id'),
				'conditions' => array('Wishlist.user' => $current_user[0]['User']['username'])
			));
			$this->set('wishlist_items', $wishlist_items);

			//find session user wishlist products by id's
			for($i=0; $i<count($wishlist_items); $i++){
				$wishlist[$i] = $this->Item->find('all', array(
					'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price'),
					'conditions' => array('Item.id' => $wishlist_items[$i]['Wishlist']['product_id'])
				));
			}
			if(isset($wishlist))
				$this->set('wishlist', $wishlist);

		}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function edit($id = null) {
			$folderToSaveFiles = WWW_ROOT . 'img/uploads/' ;
			//debug($folderToSaveFiles);
			if ($this->request->is(array('post', 'put'))) {

				if(!empty($this->request->data))
				   {
				       //Check if image has been uploaded
				       if(!empty($this->request->data['User']['picture']))
				       {
				               $file = $this->request->data['User']['picture'];
				               $new_file = $this->data['User']['username'];
				               debug( $file );

				               $ext = substr(strtolower(strrchr($file, '.')), 1); //get the extension
				               $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
				               debug( $ext);
				               //only process if the extension is valid
				               if(in_array($ext, $arr_ext))
				               {
				               	debug($file);
				               	debug($folderToSaveFiles . $new_file);
				                   if(move_uploaded_file($file, $folderToSaveFiles . $new_file))
				                   {
				                   //atualiza nome do ficheiro a mandar para bd
				                   $this->request->data['User']['picture'] = $new_file;
				                   
				                   }
				                   else{
				                   		$this->Session->setFlash(__('Falha no upload da imagem.'), 'alert', array(
									'plugin' => 'BoostCake',
									'class' => 'alert-danger'
									));

									return $this->redirect(array('action' => 'edit/'.$this->data['User']['id']));
				                   }


				               }
				               else
				               {
				               		$this->Session->setFlash(__('Formato de imagem inválido.'), 'alert', array(
									'plugin' => 'BoostCake',
									'class' => 'alert-danger'
									));

									return $this->redirect(array('action' => 'edit/'.$this->data['User']['id']));
				               }
				       }
					
						if ($this->User->save($this->request->data)) {
							$this->Session->setFlash(__('Os dados foram guardados com sucesso.'), 'alert', array(
							'plugin' => 'BoostCake',
							'class' => 'alert-success'
							));
							return $this->redirect(array('action' => 'index'));

							// form validation failed
						} else {
							$this->Session->setFlash(__('Erro ao submeter as alterações.'), 'alert', array(
							'plugin' => 'BoostCake',
							'class' => 'alert-danger'
							));
						}
					}
			} else {
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}
		} 
		   
	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	}
