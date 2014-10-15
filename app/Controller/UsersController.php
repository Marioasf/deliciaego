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
	$this->Auth->allow('login','logout','signup');
}

public function login() {
	$this->layout = false;
	if ($this->request->is('post')) {
		if ($this->Auth->login()) {
			return $this->redirect($this->Auth->redirect());
		}
		$this->Session->setFlash(__('Your username or password was incorrect.'));
	}
}

public function logout() {
	$this->layout = false;
	return $this->redirect($this->Auth->logout());
}



/**
 * add method
 *
 * @return void
 */
public function signup() {
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
 * index method
 *
 * @return void
 */

public function index() {
	$this->User->recursive = 0;
	$this->set('users', $this->Paginator->paginate());
		//users lists
	$users = $this->User->find('all', array(
		'conditions' => array('NOT' => array('User.username' => $this->Auth->user('username')))
		));
	$this->set('users', $users);

	$friends = $this->Friend->find('all', array(
		'fields' => 'Friend.user2',
		'conditions' => array('Friend.user1' => $this->Auth->user('username'))
		));
	$this->set('friends', $friends);
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
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function edit($id = null) {
	if (!$this->User->exists($id)) {
		throw new NotFoundException(__('Invalid user'));
	}
	if ($this->request->is(array('post', 'put'))) {
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('The user has been saved.'));
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
