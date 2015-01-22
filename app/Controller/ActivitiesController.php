<?php
App::uses('AppController', 'Controller');
/**
 * Activities Controller
 *
 * @property Activity $Activity
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ActivitiesController extends AppController {

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
		$this->Activity->recursive = 0;
		$this->set('activities', $this->Paginator->paginate(
			'Activity', array(
				'Activity.checked' => 0,
				'Activity.friend_username' => $this->Auth->user('username')
				)
		));
		/*Marcar conversa como lida*/
		
		if ($this->request->is(array('post', 'put'))) {
			if (!$this->Activity->exists($this->request->data['Activity']['id'])) {
				throw new NotFoundException(__('Invalid chat'));
			}
			//$this->request->data['Chat']['checked']='1';
			//debug($this->request->data);die;
			if ($this->Activity->save($this->request->data)) {
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
		if (!$this->Activity->exists($id)) {
			throw new NotFoundException(__('Invalid activity'));
		}
		$options = array('conditions' => array('Activity.' . $this->Activity->primaryKey => $id));
		$this->set('activity', $this->Activity->find('first', $options));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Activity->delete()) {
			$this->Session->setFlash(__('The activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
