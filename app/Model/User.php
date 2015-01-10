    <?php
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
        

        public function beforeSave($options = array()) {
                if (!$this->id) {
                    $passwordHasher = new BlowfishPasswordHasher();
                    $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
                }
                return true;
            }

}
