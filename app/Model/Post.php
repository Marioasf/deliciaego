<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */

class Post extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

	public $hasMany = array(
	       'Like' => array(
	           'className' => 'Like',
	           'foreignKey' => 'post_id'
	       )
	   );

	public $validate = array(
		'user' => array(
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
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	function findUsernameByPostId($post_id){
		$friend_username = $this->find('first', array(
		'conditions' => array('Post.id' => $post_id),
		'fields' => array('Post.user')
		));
		return $friend_username;
	}

	function countAllLikes($username){
		//procura os posts em que o utilizador em sessão fez 'Like'
		$likes = $this->Like->find('all', array(
			'conditions' => array('Like.username' => $username)
			));

		return $likes;
	}

	function findIfPostLiked($username, $post_id){
		//procura se o utilizador em sessão fez 'Like' no post
		$likes = $this->Like->find('first', array(
			'conditions' => array('Like.username' => $username, 'Like.post_id' => $post_id)
			));

		return $likes;
	}
}
