<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	/*var $name = 'Users';*/
	var $helpers = array('Html','Form');
/**
 * Components
 *
 * @var array
 */

	public $paginate = array(
		'limit' => 3,
		'contain' => array('User')
	);

	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('add', 'logout');
	}

	public function login() {
		if ($this->request->is('post')) {
			$username = $this->request->data['User']['username'];
			if($this->User->find('count',array('conditions' => array('User.username' => $username))) == 0){
				$this->Flash->error("User ".$username." doesn't exist");
			}else{
				if ($this->Auth->login()) {
					$username = $this->Auth->user('username');
					if($this->Auth->loggedIn()){
						$this->Flash->success(__('Welcome back '.$username.'!'));
					}
				}else{
					$this->Flash->error(__('Invalid password, try again'));
				}
			}
		}
		return $this->redirect($this->Auth->redirectUrl());
	}

	public function logout() {
		$username = $this->Auth->user('username');
		$this->Flash->success(__('See you next time '.$username.'!'));
		return $this->redirect($this->Auth->logout());
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate('User');
		$this->set('users',$data);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$username = $this->request->data['User']['username'];
			$email = $this->request->data['User']['email'];

				//Validate the email(Must be unique)
				if($this->User->find('count',array('conditions' => array('User.email' => $email))) != 0){
					$this->Flash->error("The email: ".$email." already has an account");
				}else{
					//Validate the username(Must be unique)
					if($this->User->find('count',array('conditions' => array('User.username' => $username))) != 0){
						$this->Flash->error("Username: ".$username." not available");
					}else{
						//Try to create the user (model validation)
						$this->User->create();
						$this->request->data['User']['logo'] = 'avatar-default.png';
						if ($this->User->save($this->request->data)) {
							$this->Flash->success(__('The user has been saved.'));
						} else {
							$errorsArray = array();

							$message = 'The user could not be saved. Please, try again.';
							array_push($errorsArray,$message);

							$errors = $this->User->validationErrors;
							foreach($errors as $data){
								array_push($errorsArray,$data[0]);
							}

							$this->Flash->error(implode(" | ", $errorsArray));
						}
					}
				}
		}
		return $this->redirect(array('controller' => 'questions','action' => 'index'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
