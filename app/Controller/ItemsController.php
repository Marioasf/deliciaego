<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 * @property Item $Item
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ItemsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public $uses = array('Item','Wishlist');

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->paginate = array(
				      'conditions' => array('Item.user !=' => $this->Auth->user('username')),
				      'limit' => 2
				  );
		$items = $this->paginate('Item');
		$this->set(compact('items'));

		$wishlist = $this->Wishlist->find('all', array(
			'conditions' => array('Wishlist.user' => $this->Auth->user('username'))
			));

		$this->set('wishlist',$wishlist);

		if ($this->request->is('post')) {
			$this->Wishlist->create();
			if ($this->Wishlist->save($this->request->data)) {
				$this->Session->setFlash(__('Este item foi adicionado à sua lista de desejos.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Este item não pôde ser adicionado à lista de desejos.'), 'alert', array(
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
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$this->set('item', $this->Item->find('first', $options));

		//find user
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
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('O item foi guardado com sucesso.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-sucess'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
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
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
			$this->request->data = $this->Item->find('first', $options);
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
		$this->Wishlist->id = $id;
		if (!$this->Wishlist->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Wishlist->delete()) {
			$this->Session->setFlash(__('Este item foi removido da sua lista de desejos.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-success'
			));
		} else {
			$this->Session->setFlash(__('Este item não pôde ser removido da lista de desejos.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
