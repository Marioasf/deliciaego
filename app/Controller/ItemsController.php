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

	public $uses = array('Item','Wishlist','Comment','Company');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('view', 'index');
	}


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
		//procura item a ser mostrado na view
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$item = $this->Item->find('first', $options);
		if(isset($item))
			$this->set('item', $item);
		
		//procura utilizador associado ao item
		$options = array('conditions' => array('User.username' => $item['Item']['user']));
		$user = $this->User->find('first', $options);
		if(isset($user))
			$this->set('user', $user);
		
		//procura empresa associada a produto
		$options = array('conditions' => array('Company.user' => $user['User']['username']));
		$company = $this->Company->find('first', $options);
		if(isset($company))
			$this->set('company', $company);

		//procurar todos os comentários relacionados com este item
		$comments = $this->Comment->find('all', array(
			'conditions' => array(
			'Comment.product' => $item['Item']['id']),
			'order' => 'Comment.datemade'
		));
		if(isset($comments))
			$this->set('comments', $comments);
		
		
		//procurar informação dos utilizadores responsaveis pelos comentários
		for($i=0; $i<count($comments); $i++){
			$user_comment[$i] = $this->User->find('all', array(
				'conditions' => array('User.username' => $comments[$i]['Comment']['user']),
				'fields' => 'picture,first_name,last_name'
			));
		}
		
		if(isset($user_comment))
			$this->set('user_comment', $user_comment);
		
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('O seu comentário foi introduzido com sucesso.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
					));
				$friend_username = $this->Item->find('first',array(
					'conditions' => array('Item.id' => $this->request->data['Comment']['product']),
					'fields' => array('Item.user')
					));

				/*Guarda actividade na bd*/
				$this->Activity->create();
				$this->request->data['Activity']['activity_id']=$this->Comment->id;
				$this->request->data['Activity']['type']='item_comment';
				$this->request->data['Activity']['username']=$this->Auth->user('username');
				$this->request->data['Activity']['friend_username']=$friend_username['Item']['user'];		
				$this->request->data['Activity']['datemade']=date('Y-m-d H:i:s');
				$this->request->data['Activity']['checked']=0;

				if($this->Activity->save($this->request->data)) {
					$this->Session->setFlash(__('Actividade registada.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
					));
				}

				return $this->redirect(array('action' => '/view/'.$this->request->data['Comment']['product']));
			} else {
				$this->Session->setFlash(__('A introdução do seu comentário falhou. Tente novamente'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
				));
				//debug($this->Comment->invalidFields());
				return false;
			}
		}

	}

	public function deleteComment($id = null) {
			$this->Comment->id = $id;
			if (!$this->Comment->exists()) {
				throw new NotFoundException(__('Invalid comment'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Comment->delete()) {

				$this->Session->setFlash(__('O seu comentário foi removido.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-success'
			));
				return $this->redirect(array('action' => '/index'));

			} else {

					$this->Session->setFlash(__('O seu comentário não pôde ser removido.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
				));
					return $this->redirect(array('action' => '/index'));

			}
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

				/*Guarda actividade na bd*/
				$this->Activity->create();
				$this->request->data['Activity']['activity_id']=$this->Item->id;
				$this->request->data['Activity']['type']='item';
				$this->request->data['Activity']['username']=$this->Auth->user('username');
				$this->request->data['Activity']['friend_username']=$this->request->data['Item']['user'];
				$this->request->data['Activity']['datemade']=date('Y-m-d H:i:s');
				$this->request->data['Activity']['checked']='0';
				if($this->Activity->save($this->request->data)) {
					$this->Session->setFlash(__('Actividade registada.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
					));
				}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O item não pôde ser guardado. Tente novamente.'), 'alert', array(
								'plugin' => 'BoostCake',
								'class' => 'alert-danger'
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
	public function deleteWish($id = null) {
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
