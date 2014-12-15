<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

	public $components = array('Paginator', 'Session');

	public $uses = array('Post', 'Friend', 'User', 'Comment');

	public function index(){
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => '/'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());

		$friends = $this->Friend->find('all', array(
			'fields' => 'Friend.user2',
			'conditions' => array('Friend.user1' => $this->Auth->user('username'))
			));
		
		for($i=0; $i<count($friends); $i++)
		{
			 $friend_list[$i]=$friends[$i]['Friend']['user2'];
		}

		$friend_posts=$this->Post->find('all', array(
		    'conditions' => array(
		        "Post.user" => $friend_list
		    ),
		     'order' => array('Post.datemade' => 'DESC')
		));
		for($i=0; $i<count($friend_posts); $i++)
		{
			$comments=$this->Comment->find('all', array(
				'Comment.post' => $friend_posts[$i]['Post']['id'],
				'order' => 'Comment.datemade'
			));
			$friend_plist[$i]=$friend_posts[$i]['Post']['user'];
		}
		foreach($friend_posts as $post){
			$friend_info=$this->User->find('all', array(
					'conditions' => array('User.username'=> $friend_plist)
			));
		}
		$user_friend;
		for($i=0; $i<count($friend_posts); $i++){
			for($j=0; $j<count($friend_info); $j++){
				if($friend_posts[$i]['Post']['user']==$friend_info[$j]['User']['username']){
					$user_friend[$i] = $friend_info[$j];
				}
			}
		}
		for($i=0; $i<count($comments); $i++){
			$user_comment=$this->User->find('all', array(
				'conditions' => array('User.username' => $comments[$i]['Comment']['user']
			)));
		}
		$this->set('user_comment', $user_comment);
		$this->set('comments', $comments);
		$this->set('friend_plist', $friend_plist);
		$this->set('friend_info', $friend_info);
		$this->set('friend_posts', $friend_posts);
		$this->set('friends', $friends);
		$this->set('user_friend', $user_friend);		
	}

	public function myposts(){
		$posts = $this->Post->find('all', array(
			'conditions' => array('Post.user' => $this->Auth->user('username'))
		));
		$user = $this->User->find('all', array(
			'conditions' => array('User.username' => $this->Auth->user('username'))
		));
		$this->set('user', $user);
		$this->set('posts', $posts);
	}

	public function view($id=null){
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
		$current_post = $this->Post->find('all', array(
		'conditions' => array('Post.id' => $id)
		));
		$user = $this->User->find('all', array(
			'conditions' => array('User.username' => $this->Auth->user('username'))
		));
		$comments = $this->Comment->find('all', array(
			'Comment.post' => $current_post[0]['Post']['id'],
			'order' => 'Comment.datemade'
		));
		for($i=0; $i<count($comments); $i++){
			$user_comment = $this->User->find('all', array(
				'conditions' => array('User.username' => $comments[$i]['Comment']['user'])
			));
		}
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => '/'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$this->set('user_comment', $user_comment);
		$this->set('current_post', $current_post);
		$this->set('comments', $comments);
		$this->set('user', $user);
	}


	/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}*/
	public function add() {
	if ($this->request->is('post')) {
		$this->Post->create();
		if ($this->Post->save($this->request->data)) {
			$this->Session->setFlash(__('The post has been saved.'));
			return $this->redirect(array('action' => '/'));
		} else {
			$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
		}
	}
}

}
