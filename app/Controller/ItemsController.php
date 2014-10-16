<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 */
class ItemsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public $uses = array('Item', 'User');

	public function index(){
		$this->Item->recursive = 0;
		$this->set('items', $this->Paginator->paginate());

				$items = $this->Item->find('all', array(
			'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price')
			));
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

				$items = $this->Item->find('all', array(
			'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price')
			));
						$users = $this->User->find('all');
			$this->set('users', $users);

		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$this->set('item', $this->Item->find('first', $options));
	}
}
