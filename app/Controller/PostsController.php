<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

	public $components = array('Paginator', 'Session');

	public $uses = array('Post', 'Friend', 'User');

	public function index(){
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());

		$friends = $this->Friend->find('all', array(
			'fields' => 'Friend.user2',
			'conditions' => array('Friend.user1' => $this->Auth->user('username'))
			));

		for($i=0; $i<count($friends); $i++){
			$friend_info[$i] = $this->User->find('all', array(
				'fields' => array('User.first_name', 'User.last_name', 'User.country', 'User.company', 'User.picture'),
				'conditions' => array('User.username' => $friends[$i]["Friend"]["user2"])
			));
		}
		
		for($i=0; $i<count($friends); $i++){
			$posts[$i] = $this->Post->find('all', array(
				'fields' => array('Post.user', 'Post.datemade', 'Post.content', 'Post.picture', 'Post.video', 'Post.location', 'Post.tagged'),
				'conditions' => array('Post.user' => $friends[$i]["Friend"]["user2"])
				));
		}

		$this->set('posts', $posts);	
		$this->set('friend_info', $friend_info);
		$this->set('friends', $friends);
	}
}
