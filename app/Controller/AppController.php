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

        public $uses = array('Activity','User','Friend');

        public $helpers = array(
            'Session',
            'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
            'Form' => array('className' => 'BoostCake.BoostCakeForm'),
            'Paginator' => array('className' => 'BoostCake.BoostCakePaginator')
        );
 

        public $components = array(
            'Session',
            'RequestHandler',
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
        //carrega todas as notificações do utilizador em sessão
         $activities = $this->Activity->find('all', array(
        'conditions' => array('Activity.friend_username' => $this->Auth->user('username'),           
        'Activity.checked' => 0)));

         //carrega notificações dos pedidos de amizade ainda não vistas pelo utilizador em sessão
         $requests_activities = $this->Activity->find('all', array(
        'conditions' => array('Activity.friend_username' => $this->Auth->user('username'),
        'Activity.type' => 'add',           
        'Activity.checked' => 0)));

         //carrega todas notificações dos pedidos de amizade relativos ao utilizador em sessão
         $friend_requests = $this->Friend->find('all', array(
        'conditions' => array('Friend.user2' => $this->Auth->user('username'),
        'Friend.accepted' => 0)));

         //carrega id do pedido de amizade da tabela friends
         /*$friend_request_id = $this->Friend->find('all', array(
            'conditions' => array('Friend.user2' > $this->Auth->user('username'),
                'Friend.accepted' => 0),
            'fields' => array('Friend.id')));*/
         

         //info a apresentar dos utilizadores que fizeram pedido de amizade
         for($i=0;$i<count($friend_requests);$i++)
         {
            $request_user[$i] = $this->User->find('all', array(
            'fields' => array('User.username','User.first_name', 'User.last_name', 'User.picture'),
            'conditions' => array('User.username' => $friend_requests[$i]['Friend']['user1'])));
        }
        
        $this->set('activities',$activities);
        $this->set('friend_requests',$friend_requests);
        $this->set('requests_activities',$requests_activities);

        if(isset($request_user))
            $this->set('request_user',$request_user);

        //carrega as notificações de mensagens
        //uma conversação => mensagens trocadas por utilizador em sessão e determinado user 
        //a fazer
    }

    public function checkActivities(){
        $this->Activity->saveMany($this->request->data);
        $this->Session->setFlash(__('As atividades foram gravadas.'), 'alert', array(
        'plugin' => 'BoostCake',
        'class' => 'alert-success'
        ));
    }

    /**
     * Changes the activity status to checked
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
        public function edit($id = null)
        {
            $this->Activity->id = $id;
            if (!$this->Activity->exists())
            {
                $this->Session->setFlash('Invalid user', 'error');
                $this->redirect(array('action' => 'index'));
            }

            $checked= $this->Activity->read('checked');
            $checked=1;

            $this->Activity->saveField('checked', $checked);
            $this->Session->setFlash(__('O post não pôde ser removido.'), 'alert', array(
                'plugin' => 'BoostCake',
                'class' => 'alert-success'
                ));
            $this->redirect(array('action' => 'index'));
        }
     
}