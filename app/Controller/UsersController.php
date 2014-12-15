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

	public $uses = array('User','Friend','Item');

	public function beforeFilter() {
		parent::beforeFilter();
	    // Allow any user to login, logout and signup
		$this->Auth->allow('login','logout','signup','add');
	}

	public function login() {
		$this->layout = false;
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('A sua password e/ou nome de utilizador estão incorretos.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-danger'
			));
		}
	}

	public function logout() {
		$this->layout = false;
		return $this->redirect($this->Auth->login());
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
		$this->set('friend_info',$friend_info);
		$this->set('user_in_session',$this->Auth->user('username'));
		
		if ($this->request->is('post')) {
			$this->Friend->create();
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('The friend has been saved.'));
				return $this->redirect(array('action' => 'index'));
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
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->set('user', $this->User->find('first', $options));
			$current_user = $this->User->find('all', array(
			'conditions' => array('User.id' => $id)
			));
			$friends = $this->Friend->find('all', array(
			'conditions' => array('Friend.user1' => $current_user[0]['User']['username'])
			));

			$this->set('friends', $friends);
			for($i=0; $i<count($friends); $i++){
				$friend_info[$i] = $this->User->find('all', array(
				'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
				));
		}
		$this->set('friend_info',$friend_info);
		$items = $this->Item->find('all', array(
			'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price'),
			'conditions' => array('Item.user' => $current_user[0]['User']['username'])
		));

		$this->set('items', $items);
		}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function edit($id = null) {
			if ($this->request->is(array('post', 'put'))) {
					
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
