<?php
App::uses('AppController', 'Controller');
/**
 * VoteAnswers Controller
 *
 * @property VoteAnswer $VoteAnswer
 * @property PaginatorComponent $Paginator
 */
class VoteAnswersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VoteAnswer->recursive = 0;
		$this->set('voteAnswers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VoteAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid vote answer'));
		}
		$options = array('conditions' => array('VoteAnswer.' . $this->VoteAnswer->primaryKey => $id));
		$this->set('voteAnswer', $this->VoteAnswer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VoteAnswer->create();
			if ($this->VoteAnswer->save($this->request->data)) {
				$this->Flash->success(__('The vote answer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vote answer could not be saved. Please, try again.'));
			}
		}
		$users = $this->VoteAnswer->User->find('list');
		$answers = $this->VoteAnswer->Answer->find('list');
		$this->set(compact('users', 'answers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VoteAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid vote answer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VoteAnswer->save($this->request->data)) {
				$this->Flash->success(__('The vote answer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vote answer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VoteAnswer.' . $this->VoteAnswer->primaryKey => $id));
			$this->request->data = $this->VoteAnswer->find('first', $options);
		}
		$users = $this->VoteAnswer->User->find('list');
		$answers = $this->VoteAnswer->Answer->find('list');
		$this->set(compact('users', 'answers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VoteAnswer->id = $id;
		if (!$this->VoteAnswer->exists()) {
			throw new NotFoundException(__('Invalid vote answer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->VoteAnswer->delete()) {
			$this->Flash->success(__('The vote answer has been deleted.'));
		} else {
			$this->Flash->error(__('The vote answer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
