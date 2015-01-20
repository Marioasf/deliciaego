<?php
App::uses('AppModel', 'Model');
/**
 * Friend Model
 *
 */
class Friend extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'datemade' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	/*Procura amigos do utilizador passado por parâmetro e retorna uma lista simples com os seus nomes utilizador*/
	public function findUserFriends($username){
		/*Lista de amigos aceites pelo utilizador requisitado*/
		$friends = $this->find('all', array(
		        'conditions' => array('Friend.accepted' => 1,
						'OR' => array('Friend.user1' => $username,
			                        'Friend.user2' => $username)
			                        )));
		/*Copia os nomes de amigos p/ um array simples*/
		$friends_username=array();
		if(isset($friends)){
			for($i=0;$i<count($friends);$i++){
				if($friends[$i]['Friend']['user1']==$username)
					$friends_username[$i]=$friends[$i]['Friend']['user2'];
				else if($friends[$i]['Friend']['user2']==$username)
					$friends_username[$i]=$friends[$i]['Friend']['user1'];
			}
		}
		return $friends_username;
	}

	/*Verifica se utilizador pertence à lista de amigos do utilizador em sessão*/
	public function isFriend($friends_username, $username){
		for($i=0;$i<count($friends_username);$i++){
			if($friends_username[$i] == $username){		
				return TRUE;
			}
		}
		return FALSE;
	}
}
