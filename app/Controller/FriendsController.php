<?php
App::uses('AppController', 'Controller');
/**
 * Friends Controller
 *
 * @property Friend $Friend
 * @property PaginatorComponent $Paginator
 */
class FriendsController extends AppController {

/**
 * Components
 *
 * @var array
 */

public $components = array('Paginator', 'Session');
public $uses = array('User','Friend');

/**
 * index method
 *
 * @return void
 */
public function index() {
	$users = $this->paginate('User',array('User.username !=' => $this->Auth->user('username')));
	$this->set('users', $users);
	
	/*Friends list*/
	$friends = $this->Friend->find('all', array(
		'fields' => 'Friend.user2',
		'conditions' => array('Friend.user1' => $this->Auth->user('username'), array('Friend.accepted' => 1))
	));

	/*Friends user info*/
	for($i=0; $i<count($friends); $i++){
		$friend_info[$i] = $this->User->find('all', array(
			'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
	));
	}

	$this->set('friends', $friends);
	$this->set('friend_info', $friend_info);
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function view($id = null) {
	if (!$this->Friend->exists($id)) {
		throw new NotFoundException(__('Invalid friend'));
	}
	$options = array('conditions' => array('Friend.' . $this->Friend->primaryKey => $id));
	$this->set('friend', $this->Friend->find('first', $options));
}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function delete($id = null) {
	$this->Friend->id = $id;
	if (!$this->Friend->exists()) {
		throw new NotFoundException(__('Invalid friend'));
	}
	$this->request->allowMethod('post', 'delete');
	if ($this->Friend->delete()) {
		$this->Session->setFlash(__('The friend has been deleted.'));
	} else {
		$this->Session->setFlash(__('The friend could not be deleted. Please, try again.'));
	}
	return $this->redirect(array('action' => 'index'));
}
}