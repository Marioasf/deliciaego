    <?php
    App::uses('AuthComponent', 'Controller/Component');
    App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

    class User extends AppModel {

        public $actsAs = array(
             'Upload.Upload' => array(
                 'photo' => array(
                     'fields' => array(
                         'dir' => 'photo_dir'
                     )
                 )
             )
         );


        public $validate = array(
            'username' => array(
                'nonEmpty' => array(
                    'rule' => array('notEmpty'),
                    'message' => 'Tem de introduzir um nome de utilizador.',
                    'allowEmpty' => false
                    ),
                'between' => array(
                    'rule' => array('between', 5, 15),
                    'required' => true,
                    'message' => 'O nome de utilizador deve conter entre 5 e 15 carateres.'
                    ),
                'unique' => array(
                    'rule'    => array('isUniqueUsername'),
                    'message' => 'Este username já se encontra atribuído. Por favor escolha outro.'
                    ),
                'alphaNumericDashUnderscore' => array(
                    'rule'    => array('alphaNumericDashUnderscore'),
                    'message' => 'O nome de utilizador deve conter apenas letras(a..z), números(0..9) e sublinhados(_).'
                    ),
                ),
            'password' => array(
                'required' => array(
                    'rule' => array('notEmpty'),
                    'message' => 'Tem de introduzir uma password.'
                    ),
                'min_length' => array(
                    'rule' => array('minLength', '6'), 
                    'message' => 'A password deve ter um mínimo de 6 carateres.'
                    )
                ),

            'password_confirm' => array(
                'required' => array(
                    'rule' => array('notEmpty'),
                    'message' => 'Por favor confirme a password'
                    ),
                'equaltofield' => array(
                    'rule' => array('equaltofield','password'),
                    'message' => 'As passwords tem que ser iguais.',
                    'on' => 'create',
                    )
                ),

            'email' => array(
                'required' => array(
                    'rule' => array('email', true),   
                    'message' => 'Por favor introduza um endereço de email válido.'   
                    ),
                //comentado porque não permite que seja submetido um formulário com um email igual ao já existente (p.ex. ao editar os dados de utilizador)
                 'unique' => array(
                    'rule'    => array('isUniqueEmail'),
                    'message' => 'Este endereço de email já se encontra em utilização.',
                    ),
            'between' => array(
                'rule' => array('between', 6, 60),
                'message' => 'O nome de utilizador deve ter entre 6 e 60 carateres.'
                )
            ),      

            'password_update' => array(
                'min_length' => array(
                    'rule' => array('minLength', '6'),  
                    'message' => 'A password deve ter um mínimo de 6 carateres.',
                    'allowEmpty' => true,
                    'required' => false
                    )
                ),
            'password_confirm_update' => array(
               'equaltofield' => array(
                'rule' => array('equaltofield','password_update'),
                'message' => 'As passwords tem que ser iguais.',
                'required' => false,
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
                    if($this->data[$this->alias]['id'] == $username['User']['id']){
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
                if($this->data[$this->alias]['id'] == $email['User']['id']){
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
            return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname];
        }

        /**
         * Before Save
         * @param array $options
         * @return boolean
         */
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
