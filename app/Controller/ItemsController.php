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

	public $uses = array('Item');

	public function index(){
		$this->Item->recursive = 0;
		$this->set('items', $this->Paginator->paginate());

				$items = $this->Item->find('all', array(
			'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price')
			));

			$this->set('items', $items);
	}
}
