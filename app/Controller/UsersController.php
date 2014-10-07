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

	public $uses = array('User','Friend','Item','Post');

	public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('add', 'logout');
}

public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        }
        $this->Session->setFlash(__('Your username or password was incorrect.'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}

/**
 * index method
 *
 * @return void
 */

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
		//profile lists
		//list friends
		$friends = $this->Friend->find('all', array(
			'conditions' => array('Friend.user1' => $this->Auth->user('username'))
			));
		for($i=0; $i<count($friends); $i++){
			$friend_info[$i] = $this->User->find('all', array(
				'fields' => array('User.first_name', 'User.last_name', 'User.country', 'User.company'),
				'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
				));
		}
			$this->set('friends', $friends);
			$this->set('friend_info', $friend_info);
		//list items
		$items = $this->Item->find('all', array(
			'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price'),
			'conditions' => array('Item.user' => $this->Auth->user('username'))
		));

		//list activities

        $posts = $this->Post->find('all', array(
			'conditions' => array('Post.user' => $this->Auth->user('username'))
		));

        /*for($i=0; $i<count($posts); $i++)
		{
			for($j=0; $j<count($posts[$i]['Post']); $j++){
			 $posts_simple[$i][$j]=$posts[$i]['Post'][$j];
			}
		}*/

        //$activities = array_merge($posts, $friends);

        //sort activities by date
        function cmp($a, $b){
	    		if ($a["datemade"] == $b["datemade"]) {
	        		return 0;
	   			 }
	    		return ($a["datemade"] < $b["datemade"]) ? -1 : 1;
		}

		//usort($activities,"cmp");

        //$this->set('activities', $activities);
		$this->set('items', $items);
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
 * add method
 *
 * @return void
 */
	public function add() {
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
