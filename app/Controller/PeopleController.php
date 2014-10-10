<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PeopleController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public $uses = array('User');

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
			'conditions' => array('User.username' != $this->Auth->user('username'))
		));
		$this->set('users', $users);
		}

}
