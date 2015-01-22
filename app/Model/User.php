    <?php
    App::uses('AppModel', 'Model');
    App::uses('AuthComponent', 'Controller/Component');
    App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

    class User extends AppModel {


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
                'fields' => array('User.username', 'User.first_name', 'User.last_name', 'User.email', 'User.picture'),
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
                    //debug($options);
                    $passwordHasher = new BlowfishPasswordHasher();
                    $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
                return true;
        }*/

        /*public function beforeSave($options = array()) {

            if (isset($this->data[$this->alias]['password'])) {

                if(isset($this->data[$this->alias]['id'])) {
                    $id = $this->data[$this->alias]['id'];
                    $user = $this->findById($id);
                } else {
                    $id = false;
                }

                if(!$id || $this->data[$this->alias]['password'] != $user['User']['password']) {
                    $passwordHasher = new BlowfishPasswordHasher();
                    $this->data[$this->alias]['password'] = $passwordHasher->hash(
                        $this->data[$this->alias]['password']
                    );
                }

            }

            return true;
        }*/

        public function beforeSave2($options = array()) {
            /*if (isset($this->data[$this->alias]['password'])) {
                $passwordHasher = new BlowfishPasswordHasher();
                $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
                );
            }*/
            return true;
        }
        /**
         * Before Save
         * @param array $options
         * @return boolean
         */
         public function beforeSave($options = array()) {
            // hash our password
            $passwordHasher = new BlowfishPasswordHasher();
            if (isset($this->data[$this->alias]['password'])) {
                $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
            }
             
            // if we get a new password, hash it
            if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
                $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password_update']);
            }
         
            // fallback to our parent
            return true;
        }

}
