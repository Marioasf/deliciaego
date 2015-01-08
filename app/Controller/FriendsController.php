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
	
	/*Lista de amigos*/
	$friends = $this->Friend->find('all', array(
		'conditions' => 
			array(
				'Friend.accepted' => 1
				),
			array(
				"AND" => array(array('Friend.user1' => $this->Auth->user('username')), "OR" => array('Friend.user2' => $this->Auth->user('username')))
				)
				 	
		)
	);


	if(isset($friends))
		$this->set('friends', $friends);

	//debug($friends);
	/*Informação do utilizador que propôs amizade*/
	for($i=0; $i<count($friends); $i++){
		$friend_info_user1[$i] = $this->User->find('all', array(
			'conditions' => array('User.username' => $friends[$i]["Friend"]["user1"])
	));
	}

	if(isset($friend_info_user1))
		$this->set('friend_info_user1', $friend_info_user1);

	/*Informação do utilizador a que foi proposta a amizade*/
	for($i=0; $i<count($friends); $i++){
		$friend_info_user2[$i] = $this->User->find('all', array(
			'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
	));
	}

	if(isset($friend_info_user2))
		$this->set('friend_info_user2', $friend_info_user2);
}

public function accept_index() {
	$users = $this->paginate('User',array('User.username !=' => $this->Auth->user('username')));
	$this->set('users', $users);
	
	/*Friends list not accepted*/
	$friends = $this->Friend->find('all', array(
		'fields' => 'Friend.user1, Friend.id',
		'conditions' => array('Friend.user2' => $this->Auth->user('username'), array('Friend.accepted' => 0))
	));
	if(isset($friends))
		$this->set('friends', $friends);
	//debug($friends);
	/*Friends user info*/
	for($i=0; $i<count($friends); $i++){
		$friend_info[$i] = $this->User->find('all', array(
			'conditions' => array('User.username' => $friends[$i]["Friend"]["user1"])
	));
	}

	if(isset($friend_info))
		$this->set('friend_info', $friend_info);

	
		
		if ($this->request->is(array('post', 'put'))) {
			
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('Amigo adicionado.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-success'
			));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Amigo não adicionado.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-danger'
			));
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


   /**
* Changes the friend status to accepted
*
* @throws NotFoundException
* @param string $id
* @return void
*/
   public function acceptFriend($id = null)
   {
   	
       $this->Friend->id = $id;
       if (!$this->Friend->exists())
       {
           $this->Session->setFlash('Invalid user', 'error');
           $this->redirect(array('action' => 'index'));
       }

       $accepted= $this->Friend->read('accepted');
       $accepted=1;

       $this->Friend->saveField('accepted', $accepted);
       $this->Session->setFlash(__('Pedido de amizade aceite.'), 'alert', array(
           'plugin' => 'BoostCake',
           'class' => 'alert-success'
           ));
       $this->redirect(array('action' => 'index'));
   }

}