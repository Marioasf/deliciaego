	<?php
	App::uses('AppController', 'Controller');
	App::uses('CakeEmail', 'Network/Email');
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
	public $components = array('Paginator', 'Session', 'Auth');

	public $uses = array('User','Friend','Item','Wishlist', 'Activity','Group');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('login', 'signup', 'confirm_account','logout','lock');
	}

	public function confirm_account($username=null,$activated=null){
		
		if(isset($username) && isset($activated)){
				if($this->User->userExists($username)){
					$this->User->id=$this->User->findIdByUsername($username);
					
					if ($this->User->saveField('activated',1)) {
						
						$this->User->saveField('ip', $this->request->clientIp());
						$this->User->saveField('lastlogin',date('Y-m-d H:i:s'));
						$this->Session->setFlash(__('A sua conta encontra-se validada. Por favor efetue o login.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
						
						//Auto-login
						if($this->Auth->login($this->User->findUserDataById($this->User->id)['User'])){
							$this->Session->setFlash(__('Bem vindo. Para editar os dados da sua conta por favor clique no seu nome no topo superior e de seguida em definições de conta.\n'), 'alert', array(
													'plugin' => 'BoostCake',
													'class' => 'alert-success'
													));
							return $this->redirect(array('controller' => 'posts'));
						}
						else{

							return $this->redirect(array('action' => 'login'));
						}
					} else {
						$this->Session->setFlash(__('Ocorreu um erro e a sua conta não foi validada. Por favor contacte o administrador da página.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-danger'
						));
					}
				}
				else{
					$this->Session->setFlash(__('Este utilizador não se encontra registado. Por favor tente registar-se novamente.'), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
				}
		}
		else {
				$this->Session->setFlash(__('Ocorreu um erro na sua URL e a sua conta não foi validada. Por favor contacte o administrador da página.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-danger'
				));
			}
	}


	public function login() {

		$this->layout = false;

		if ($this->Session->read('Auth.User')) {
		        $this->Session->setFlash(__('Já se encontra autenticado!'), 'alert', array(
		        						'plugin' => 'BoostCake',
		        						'class' => 'alert-sucess'
		        						));
		        return $this->redirect('/');
		    }
							/*$this->User->id=$user['User']['id'];
							$this->User->saveField('ip', $this->request->clientIp());
							$this->User->saveField('lastlogin',date('Y-m-d H:i:s'));*/

							if ($this->request->is('post')) {
								if($this->Auth->login()){
									
									return $this->redirect($this->Auth->redirectUrl());
								}

								else
								$this->Session->setFlash(__('A sua password e/ou nome de utilizador estão incorretos.'), 'alert', array(
								'plugin' => 'BoostCake',
								'class' => 'alert-danger'
								));
						}
					
		
	}

	public function logout() {
		$this->layout = false;
		return $this->redirect($this->Auth->logout());
	}

	

	public function lock() {

		$user=$this->User->findLockPageInfo();
		$this->set('user', $user);

		$this->layout = false;

		if ($this->request->is('post')) {
			$this->request->data['User']['username'] = $user['User']['username'];

			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Bem vindo novamente.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-success'
			));
				return $this->redirect($this->Auth->loginRedirect);
			}
			$this->Session->setFlash(__('A sua password está incorreta.'), 'alert', array(
			'plugin' => 'BoostCake',
			'class' => 'alert-danger'
			));
		}
	}


	/**
	 * add method
	 *
	 * @return void
	 */
	public function signup() {
		$this->layout = false;
		if ($this->request->is('post')) {
			if ($this->request->data['User']['password'] == $this->request->data['User']['password_confirm'])
			{
				$this->User->create();

				$this->request->data['User']['signup']=date('Y-m-d H:i:s');
				$this->request->data['User']['lastlogin']=date('Y-m-d H:i:s');
				$this->request->data['User']['ip']=$this->request->clientIp();

				if ($this->User->save($this->request->data)) {

					   $this->Session->setFlash(__('Utilizador criado com sucesso! Por favor verifique a sua caixa de email para confirmar a sua conta.'), 'alert', array(
					   	'plugin' => 'BoostCake',
					   	'class' => 'alert-success'
					   ));
					   $this->User->sendVerificationEmail($this->request->data['User']['username'], $this->request->data['User']['email']);
					   return $this->redirect(array('action' => 'login'));

					} else {
					    $this->Session->setFlash(__('Ocorreu um erro ao criar o utilizador. Por favor tente novamente.'), 'alert', array(
					    					'plugin' => 'BoostCake',
					    					'class' => 'alert-success'
					 ));


						return $this->redirect(array('action' => 'signup'));
					}

				} 
				else{
					$this->Session->setFlash(__('O utilizador não pôde ser criado. A confirmação da password está errada.'), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-danger'
					));

					return $this->redirect(array('action' => 'signup'));
				}
			}
	}

	
	

	/**
	 * addFriend method
	 *
	 * @return void
	 */
	public function addFriend() {
		$this->layout = false;
		if ($this->request->is('post')) {
			$this->Friend->create();
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('The friend request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend request could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * index method
	 *
	 * @return void
	 */

	public function index() {

		$this->paginate = array(
		'conditions' => array('User.username !=' => $this->Auth->user('username')),
		'limit' => 20);
		$users = $this->paginate('User');
		$this->set(compact('users'));
		/*************************************************************************/
		/*Lista de amigos aceites*/
		$accepted_friends = $this->Friend->find('all', array(
		        'conditions' => array('Friend.accepted' => 1,
						'OR' => array('Friend.user1' => $this->Auth->user('username'),
			                        'Friend.user2' => $this->Auth->user('username')
			                        ))));
		
		/*Lista de utilizadores amigos aceites do utilizador em sessão*/

		/*Copia os nomes de amigos p/ um array simples*/
		$accepted_friends_username=array();
		if(isset($accepted_friends))
			for($i=0;$i<count($accepted_friends);$i++){
				if($accepted_friends[$i]['Friend']['user1']==$this->Auth->user('username'))
					$accepted_friends_username[$i]=$accepted_friends[$i]['Friend']['user2'];
				else if($accepted_friends[$i]['Friend']['user2']==$this->Auth->user('username'))
					$accepted_friends_username[$i]=$accepted_friends[$i]['Friend']['user1'];
			}

		/*Pesquisa informação dos utilizadores*/
		if(isset($accepted_friends_username))
			for($i=0;$i<count($accepted_friends_username);$i++){
				$accepted_friends_info[$i] = $this->User->find('first', array(
					'conditions' => array('User.username' => $accepted_friends_username[$i]
					)));
			}

		if(isset($accepted_friends_info)) $this->set('accepted_friends_info',$accepted_friends_info);
		//debug($accepted_friends_info);
		/***************************************************************************/
		/*Lista de amigos não aceites*/
		$not_accepted_friends = $this->Friend->find('all', array(
			'conditions' => array('Friend.accepted' => 0,
							'OR' => array('Friend.user1' => $this->Auth->user('username'),
					                      'Friend.user2' => $this->Auth->user('username')
				))));

		/*Copia os nomes de utilizador p/ um array simples*/
		$not_accepted_friends_username=array();
		if(isset($not_accepted_friends))
			for($i=0;$i<count($not_accepted_friends);$i++){
				if($not_accepted_friends[$i]['Friend']['user1']==$this->Auth->user('username'))
					$not_accepted_friends_username[$i]=$not_accepted_friends[$i]['Friend']['user2'];
				else if($not_accepted_friends[$i]['Friend']['user2']==$this->Auth->user('username'))
					$not_accepted_friends_username[$i]=$not_accepted_friends[$i]['Friend']['user1'];
			}
		//debug($not_accepted_friends_username);
		/*Pesquisa informação dos utilizadores*/
		if(isset($not_accepted_friends_username))
			for($i=0;$i<count($not_accepted_friends_username);$i++){
				$not_accepted_friends_info[$i] = $this->User->find('first', array(
					'conditions' => array('User.username' => $not_accepted_friends_username[$i]
						)));
			}
		if(isset($not_accepted_friends_info)) $this->set('not_accepted_friends_info',$not_accepted_friends_info);

		/******************************************************************************/
		/*Lista de utilizadores não amigos*/

		/*Lista de utilizadores amigos*/
		$friends=array_merge($accepted_friends_username,$not_accepted_friends_username);

		/*Adicionar utilizador em sessão à lista*/
		if(isset($friends))array_push($friends,$this->Auth->user('username'));

		/*Pesquisa informação dos utilizadores*/
		$user_info = $this->User->find('all', array(
			'conditions' => array('User.username !=' => $friends
			)));
		
		//debug($user_info);

		if(isset($user_info)) $this->set('user_info',$user_info);
		/*******************************************************************************/
		
		if ($this->request->is('post')) {
			$this->Friend->create();
			$this->request->data['Friend']['datemade']=date('Y-m-d H:i:s');
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('O seu pedido de amizade foi enviado.'), 'alert', array(
				'plugin' => 'BoostCake',
				'class' => 'alert-success'
				));
				$this->Activity->create();
				
				$this->request->data['Activity']['activity_id']=$this->Friend->id;
				$this->request->data['Activity']['type']='request';
				$this->request->data['Activity']['username']=$this->Auth->user('username');
				$this->request->data['Activity']['friend_username']=$this->request->data['Friend']['user2'];
				$this->request->data['Activity']['datemade']=date('Y-m-d H:i:s');
				$this->request->data['Activity']['checked']='1';

			} else {
				$this->Session->setFlash(__('The friend could not be saved. Please, try again.'));
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
			if (!$this->User->exists($id)) {
				throw new NotFoundException(__('Invalid user'));
			}

			//username do utilizador da view requisitada
			$username= $this->User->findUsernameById($id);
			//debug($username);
			//debug($username['User']['username']);
			/*Procura lista de amigos do utilizador em sessão (apenas pode aceder ao perfil de amigos)*/
			$friends_username = $this->Friend->findUserFriends($this->Auth->user('username'));
			//debug($friends_username);
			/*Retorna verdadeiro se utilizador for encontrado na lista de amigos*/
			$is_friend=$this->Friend->isFriend($friends_username, $username['User']['username']);
			//debug($is_friend);
			if($username['User']['username'] == $this->Auth->user('username'))
				$is_friend=TRUE;
			//se não redirecciona p/ página 404
			if(!$is_friend) throw new ForbiddenException();

			/**************************************************/
			//procura os nomes de utilizador dos amigos do utilizador requisitado
			$friends_username = $this->Friend->findUserFriends($username['User']['username']);

			if(isset($friends_username)) $this->set('friends_username', $friends_username);
			//debug($friends_username);
			//find user
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->set('user', $this->User->find('first', $options));

			$current_user = $this->User->find('all', array(
			'conditions' => array('User.id' => $id)
			));

			//find friend user info
			for($i=0; $i<count($friends_username); $i++){
				$friend_info[$i] = $this->User->find('all', array(
				'conditions' => array('User.username' => $friends_username[$i])
				));
			}
			if(isset($friend_info))
				$this->set('friend_info',$friend_info);

			//find items associated to the user in session
			$items = $this->Item->find('all', array(
				'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price', 'Item.id'),
				'conditions' => array('Item.user' => $current_user[0]['User']['username'])
			));
			$this->set('items', $items);

			//find session user wishlist items id's
			$wishlist_items = $this->Wishlist->find('all', array(
				'fields' => array('Wishlist.product_id'),
				'conditions' => array('Wishlist.user' => $current_user[0]['User']['username'])
			));
			//$this->set('wishlist_items', $wishlist_items);

			//find session user wishlist products by id's
			for($i=0; $i<count($wishlist_items); $i++){
				$wishlist[$i] = $this->Item->find('all', array(
					'fields' => array('Item.name', 'Item.description', 'Item.picture', 'Item.user', 'Item.price'),
					'conditions' => array('Item.id' => $wishlist_items[$i]['Wishlist']['product_id'])
				));
			}
			if(isset($wishlist))
				$this->set('wishlist', $wishlist);

		}

		
	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function edit($id = null) {

			//username do utilizador da view requisitada
			$username= $this->User->findUsernameById($id);
			
			//se o utilizador não for o que está em sessão redirecciona p/ página 404
			if($username['User']['username'] != $this->Auth->user('username')) throw new ForbiddenException();
			 
			if (!$this->User->exists($id)) {
				throw new NotFoundException(__('Invalid user'));
			}
			if ($this->request->is(array('post', 'put'))) {

				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('As alterações ao seu perfil foram guardadas.'), 'alert', array(
													'plugin' => 'BoostCake',
													'class' => 'alert-success'
													));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('As alterações ao seu perfil não foram guardadas.'), 'alert', array(
													'plugin' => 'BoostCake',
													'class' => 'alert-danger'
													));
				}
			} else {
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}
		}
	}
