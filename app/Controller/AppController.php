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

        public $uses = array('Activity','User','Friend','Chat');

        public $helpers = array(
            //'Session',
            'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
            'Form' => array('className' => 'BoostCake.BoostCakeForm'),
            'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
            'Session'
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
                                'controller' => 'posts',
                                'action' => 'index'
                ),
                //'authorize' => array('Controller'),
                'authenticate' => array(
                    'Form' => array(
                        'passwordHasher' => 'Blowfish',
                        'fields'         => array(
                                             'username' => 'username',
                                             'password' => 'password',
                                            ),
                    )
                ),//Boostcake plugin
                 'flash' => array(
                    'element' => 'alert',
                    'key' => 'auth',
                    'params' => array(
                        'plugin' => 'BoostCake',
                        'class' => 'alert-error'
                    )
                )
            )
        );


    // only allow the login controllers only
    public function beforeFilter() {
        /*Receita milagrosa para funcionar o login*/
        $this->Auth->authenticate = array(
                AuthComponent::ALL => array(
                    'userModel' => 'User',
                    'fields' => array(
                        'username' => 'username',
                        'password' => 'password'
                    )
                ), 'Form'=> array(
                        'passwordHasher' => 'Blowfish'
                    )
            );
        $this->Auth->allow('index','display');

        $user_id=$this->User->find('first', array(
            'fields' => array('User.id'),
            'conditions' => array('User.username' => $this->Auth->User('username'))));
        
        $this->set('user_id',$user_id);


         //carrega todas notificações dos pedidos de amizade relativos ao utilizador em sessão
         $friend_requests = $this->Friend->find('all', array(
        'conditions' => array('Friend.user2' => $this->Auth->user('username'),
        'Friend.accepted' => 0)));
         
         //info a apresentar dos utilizadores que fizeram pedido de amizade
         for($i=0;$i<count($friend_requests);$i++)
         {
            $request_user[$i] = $this->User->find('all', array(
            'fields' => array('User.username','User.first_name', 'User.last_name', 'User.picture'),
            'conditions' => array('User.username' => $friend_requests[$i]['Friend']['user1'])));
        }

        /*Carregamento das actividades e informação dos utilizadores associados */

        //carrega todas as notificações do utilizador em sessão excepto adicionar amigos
         $activity_list = $this->Activity->find('all', array(
        'conditions' => array(
            'Activity.username !=' => $this->Auth->user('username'),'Activity.friend_username' => $this->Auth->user('username'), 'Activity.checked' => 0
            )
        ));

       //debug($activity_list);die;
        //info a apresentar dos utilizadores responsáveis pelas actividades
         //for($i=0;$i<count($activity_list);$i++)
         if(!empty($activity_list)) {
            $activity_list_u = Hash::extract($activity_list, '{n}.Activity.username');

            $activity_user = $this->User->find('all', array(
            'fields' => array('User.username','User.first_name', 'User.last_name', 'User.picture'),
            'conditions' => array('User.username' => $activity_list_u)));
        }
        
        //debug($activity_user);die;
        /*Carregamento das mensagens recebidas*/
        $chat_received = $this->Chat->find('all', array(
        'conditions' => array('Chat.user2' => $this->Auth->user('username'),
        'Chat.checked' => 0)));

        /*Carregamento das mensagens enviadas*/
        $chat_sent = $this->Chat->find('all', array(
        'conditions' => array('Chat.user1' => $this->Auth->user('username'),
        'Chat.checked' => 0)));

          //info a apresentar dos utilizadores que enviaram mensagens ao utilizador em sessão
         for($i=0;$i<count($chat_received);$i++)
         {
            $chat_session_user[$i] = $this->User->find('all', array(
            'fields' => array('User.username','User.first_name', 'User.last_name', 'User.picture'),
            'conditions' => array('User.username' => $chat_received[$i]['Chat']['user1'])));
        }

        //info a apresentar dos utilizadores que receberam mensagens do utilizador em sessão
         for($i=0;$i<count($chat_sent);$i++)
         {
            $chat_user[$i] = $this->User->find('all', array(
            'fields' => array('User.username','User.first_name', 'User.last_name', 'User.picture'),
            'conditions' => array('User.username' => $chat_sent[$i]['Chat']['user2'])));
        }
        
        /*Passagem das variáveis para o layout*/

        $this->set('friend_requests',$friend_requests);

        $this->set('activity_list',$activity_list);

        $this->set('chat_received',$chat_received);

        $this->set('chat_sent',$chat_sent);


        if(isset($request_user))
            $this->set('request_user',$request_user);


        if(isset($activity_user))
            $this->set('activity_user',$activity_user);

        if(isset($chat_session_user))
            $this->set('chat_session_user',$chat_session_user);

        if(isset($chat_user))
            $this->set('chat_user',$chat_user);

    }

     
}