    <?php
    App::uses('AuthComponent', 'Controller/Component');
    App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

    class User extends AppModel {

        /*Definição de AclBehaviour que liga os modelos User e Group às entradas das tabelas Acl*/
        public $belongsTo = array(
            'Group' => array(
                    'className' => 'Group',
                    'foreignKey' => 'group_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            )
        );
        
        public $actsAs = array('Acl' => array('type' => 'requester'));

        public function parentNode() {
            if (!$this->id && empty($this->data)) {
                return null;
            }
            if (isset($this->data['User']['group_id'])) {
                $groupId = $this->data['User']['group_id'];
            } else {
                $groupId = $this->field('group_id');
            }
            if (!$groupId) {
                return null;
            }
            return array('Group' => array('id' => $groupId));
        }

        public $validate = array(
                'username' => array(
                    'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'A username is required'
                    )
                ),
                'password' => array(
                    'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'A password is required'
                    )
                )
            );

        function getSessionUserData(){
            $user = $this->Session->read("Auth.User");
            $this->id = $user['id'];
            return $this->read();
        }

        function sendVerificationEmail($username, $user_email){
            $confirmAccount_url='localhost/users/confirm_account';
            $email = new CakeEmail();
            $email->config('gmail');
            $email->from(array('deliciaego@gmail.com' => 'Deliciego'));
            $email->to($user_email);
            $email->subject('Validação da sua conta');
            $email->send('Para confirmar a sua conta por favor clique na URL '. $confirmAccount_url . '/'.$username.'/1');
        }

        function userExists($username){
            $conditions = array(
                'User.username' => $username
            );
            return $this->hasAny($conditions);
        }

        /**/
        function findUserDataById($id){
             $user_data = $this->find('first', array(
            'conditions' => array('User.id' => $id)
            ));
             return $user_data;
        }

        /**/
        function findIdByUsername($username){
             $id = $this->find('first', array(
            'fields' => array('User.id'),
            'conditions' => array('User.username' => $username)
            ));
             return $id;
        }

        /**/
        function findUsernameById($id){
             $username = $this->find('first', array(
            'fields' => array('User.username'),
            'conditions' => array('User.id' => $id)
            ));
             return $username;
        }

        /**/
        function findActivatedByUsername($username){
            $this->find('first', array(
            'fields' => array('User.activated'),
            'conditions' => array('User.name' => $username)
            ));
        }

        function findLockPageInfo(){
        return $this->find('first', array(
                'fields' => array('User.username', 'User.first_name', 'User.last_name', 'User.email'),
                'conditions' => array('User.username' => AuthComponent::user('username'))
                ));
        }


            /**
         * Before isUniqueUsername
         * @param array $options
         * @return boolean
         */
            function isUniqueUsername($check) {

                $username = $this->find(
                    'first',
                    array(
                        'fields' => array(
                            'User.id',
                            'User.username'
                            ),
                        'conditions' => array(
                            'User.username' => $check['username']
                            )
                        )
                    );

                if(!empty($username)){
                    if($this->request->data[$this->alias]['id'] == $username['User']['id']){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return true;
                }
            }

        /**
         * Before isUniqueEmail
         * @param array $options
         * @return boolean
         */
        function isUniqueEmail($check) {

            $email = $this->find(
                'first',
                array(
                    'fields' => array(
                        'User.id'
                        ),
                    'conditions' => array(
                        'User.email' => $check['email']
                        )
                    )
                );

            if(!empty($email)){
                if($this->request->data[$this->alias]['id'] == $email['User']['id']){
                    return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }
        }

        public function alphaNumericDashUnderscore($check) {
            // $data array is passed using the form field name as the key
            // have to extract the value to make the function generic
            $value = array_values($check);
            $value = $value[0];

            return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
        }

        public function equaltofield($check,$otherfield)
        {
            //get name of field
            $fname = '';
            foreach ($check as $key => $value){
                $fname = $key;
                break;
            }
            return $this->request->data[$this->name][$otherfield] === $this->request->data[$this->name][$fname];
        }

        /**
         * Before Save
         * @param array $options
         * @return boolean
         */
        

        /*public function beforeSave($options = array()) {
                if (!$this->id) {
                    $passwordHasher = new BlowfishPasswordHasher();
                    $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
                }
                return true;
        }*/

        public function beforeSave($options = array()) {
            if (isset($this->data[$this->alias]['password'])) {
                $passwordHasher = new BlowfishPasswordHasher();
               
                $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
                );
            }
            return true;
        }


}
