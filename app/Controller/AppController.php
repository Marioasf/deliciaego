    <?php
    /**
     * Application level Controller
     *
     * This file is application-wide controller file. You can put all
     * application-wide controller-related methods here.
     *
     * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
     * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
     *
     * Licensed under The MIT License
     * For full copyright and license information, please see the LICENSE.txt
     * Redistributions of files must retain the above copyright notice.
     *
     * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
     * @link          http://cakephp.org CakePHP(tm) Project
     * @package       app.Controller
     * @since         CakePHP(tm) v 0.2.9
     * @license       http://www.opensource.org/licenses/mit-license.php MIT License
     */

    App::uses('Controller', 'Controller');

    /**
     * Application Controller
     *
     * Add your application-wide methods in the class below, your controllers
     * will inherit them.
     *
     * @package		app.Controller
     * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
     */
    class AppController extends Controller {

        public $theme = 'Bracket';

        public $uses = array('Activity','User');

        public $helpers = array(
            'Session',
            'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
            'Form' => array('className' => 'BoostCake.BoostCakeForm'),
            'Paginator' => array('className' => 'BoostCake.BoostCakePaginator')
        );
 

        public $components = array(
            'Session',
            'Auth' => array(
                'loginRedirect' => array(
                    'controller' => 'posts',
                    'action' => 'index'
                ),
                'logoutRedirect' => array(
                    'controller' => 'users',
                    'action' => 'login'
                ),
                'authenticate' => array(
                    'Form' => array(
                        'passwordHasher' => 'Blowfish'
                    )
                ),//Boostcake plugin
                 'flash' => array(
                    'element' => 'alert',
                    'key' => 'auth',
                    'params' => array(
                        'plugin' => 'BoostCake',
                        'class' => 'alert-error'
                    )
                ),
            )
        );

    // only allow the login controllers only
    public function beforeFilter() {
        $this->Auth->allow('login');
        //$this->Auth->allow('signup');
        //carrega todas as atividades
         $activities = $this->Activity->find('all', array(
        'conditions' => array('Activity.friend_username' => $this->Auth->user('username'),           
        'Activity.checked' => 0)));

         //carrega os pedidos de amizade
         $friend_requests = $this->Activity->find('all', array(
        'conditions' => array('Activity.friend_username' => $this->Auth->user('username'),
        'Activity.type' => 'add',           
        'Activity.checked' => 0)));

         //info a apresentar dos utilizadores que fizeram pedido de amizade
         for($i=0;$i<count($friend_requests);$i++)
         {
            $request_user[$i] = $this->User->find('all', array(
            'fields' => array('User.username','User.first_name', 'User.last_name', 'User.picture'),
            'conditions' => array('User.username' => $friend_requests[$i]['Activity']['username'])));
        }
        
        $this->set('activities',$activities);
        $this->set('friend_requests',$friend_requests);

        if(isset($request_user))
            $this->set('request_user',$request_user);

        //carrega as notificações de mensagens
        //uma conversação => mensagens trocadas por utilizador em sessão e determinado user 
        //a fazer
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
        public function edit($id = null) {
            if (!$this->Activity->exists($id)) {
                throw new NotFoundException(__('Invalid activity'));
            }
            if ($this->request->is(array('post', 'put'))) {
                $this->request->data['Activity']['checked']='1';
                if ($this->Activity->save($this->request->data)) {
                    $this->Session->setFlash(__('The activity has been saved.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The activity could not be saved. Please, try again.'));
                }
            } else {
                $options = array('conditions' => array('Activity.' . $this->Activity->primaryKey => $id));
                $this->request->data = $this->Activity->find('first', $options);
            }
        }
     
}