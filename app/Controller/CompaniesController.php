<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompaniesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public $uses = array('Company','Follower', 'Friend','Item');

	

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->paginate = array(
		      'conditions' => array('Company.user !=' => $this->Auth->user('username')),
		      'limit' => 1
		);
		$companies = $this->paginate('Company');
		$this->set(compact('companies'));
/*
		$this->Company->recursive = 0;
		$this->set('companies', $this->Paginator->paginate());
		$companies = $this->Company->find('all');
		$this->set('companies',$companies);*/

		//$this->Follower->recursive = 0;
		//$this->set('followers', $this->Paginator->paginate());
		$followers = $this->Follower->find('all', array(
			'fields' => array('Follower.user','Follower.company'),
			'conditions' => array('Follower.user' => $this->Auth->user('username'))
		));
		$this->set('followers',$followers);

		$follower_info=array();
			for($i=0; $i<count($followers); $i++){
			$follower_info[$i] = $this->Company->find('all', array(
				'fields' => array('Company.name'),
				'conditions' => array('Company.name' => $followers[$i]["Follower"]["company"])
				));
		}
		$this->set('follower_info',$follower_info);
		$this->set('user_in_session',$this->Auth->user('username'));
		if ($this->request->is('post')) {
			$this->Follower->create();
			if ($this->Follower->save($this->request->data)) {
					$this->Session->setFlash(__('Está a seguir a empresa.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não está a seguir a empresa, tente novamente.'));
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
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
		$company = $this->Company->find('all', array(
			'conditions' => array('Company.id' => $id)
		));

		$followers = $this->Follower->find('all', array(
		'fields' => array('Follower.user'),
		'conditions' => array('Follower.company' => $company[0]['Company']['name'])
		));

		$friends = $this->Friend->find('all', array(
		'conditions' => array('Friend.user1' => $this->Auth->user('username'), 'Friend.user2' => $followers[0]['Follower']['user'])
		));
		if(isset($friends)){
			$this->set('friends', $friends);

			for($i=0; $i<count($friends); $i++){
				if($friend_info[$i][0]['User']['username'] === $company[0]['Company']['user'])
					$friend_info[$i] = $this->User->find('all', array(
					'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
					));
			}
		}


		 $items = $this->Item->find('all', array(
		 'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price', 'Item.id'),
		  'conditions' => array('Item.user' => $company[0]['Company']['user'])
		  ));
		 $this->set('items', $items);

		if(isset($friend_info))
			$this->set('friend_info',$friend_info);

		if(isset($company))
			$this->set('company', $company);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('A sua empresa foi guardada com sucesso.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Ocorreu um erro. A sua empresa não pôde ser adicionada.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
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
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
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
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('The company has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
