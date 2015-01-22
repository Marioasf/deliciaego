<?php
App::uses('AppController', 'Controller');
/**
 * Chats Controller
 *
 * @property Chat $Chat
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ChatsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter() {
	  parent::beforeFilter();
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Chat->recursive = 0;
		$this->set('chats', $this->Paginator->paginate(
			'Chat', array(
				'OR' => array(
				'Chat.user1' => $this->Auth->user('username'),
				'Chat.user2' => $this->Auth->user('username')
				)
			)
		));
		/*Marcar conversa como lida*/
		
		if ($this->request->is(array('post', 'put'))) {
			if (!$this->Chat->exists($this->request->data['Chat']['id'])) {
				throw new NotFoundException(__('Invalid chat'));
			}
			//$this->request->data['Chat']['checked']='1';
			//debug($this->request->data);die;
			if ($this->Chat->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Ocorreu um erro, tente novamente.'));
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
		if (!$this->Chat->exists($id)) {
			throw new NotFoundException(__('Invalid chat'));
		}
		$options = array('conditions' => array('Chat.' . $this->Chat->primaryKey => $id));
		$this->set('chat', $this->Chat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($username=null) {
		if ($this->request->is('post')) {
			if(isset($username)) $this->request->data['Chat']['user2']=$username;
			//debug($this->request->data['Chat']['user2']=$username);die;
			$this->Chat->create();
			if ($this->Chat->save($this->request->data)) {
					$this->Session->setFlash(__('A sua mensagem foi enviada com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Ocorreu um erro e a sua mensagem não pôde ser enviada.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
			}
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
		$this->Chat->id = $id;
		if (!$this->Chat->exists()) {
			throw new NotFoundException(__('Invalid chat'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Chat->delete()) {
			$this->Session->setFlash(__('A mensagem foi apagada com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
		} else {
			$this->Session->setFlash(__('A mensagem não pôde ser apagada. Por favor, tente novamente.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-danger'
						));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Chat->recursive = 0;
		$this->set('chats', $this->Paginator->paginate());
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Chat->exists($id)) {
			throw new NotFoundException(__('Invalid chat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Chat']['checked']=1;
			if ($this->Chat->save($this->request->data)) {
				$this->Session->setFlash(__('The chat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Chat.' . $this->Chat->primaryKey => $id));
			$this->request->data = $this->Chat->find('first', $options);
		}
	}

}

