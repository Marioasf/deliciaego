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
            'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
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
                ),
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

         $friend_notifications=array();
         //carrega as notificações de amizade
        for($i=0;$i<count($activities);$i++){
         $friend_notifications[$i] = $this->User->find('all', array(
         'conditions' => array('User.username' => $activities[$i]['Activity']['username'])
            ));
        }
         $this->set('activities',$activities);
         $this->set('friend_notifications',$friend_notifications);

        //carrega as notificações de mensagens
         //uma conversação => mensagens trocadas por utilizador em sessão e determinado user 
         //a fazer
    }
     
    }
