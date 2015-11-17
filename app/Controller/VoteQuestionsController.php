<?php
App::uses('AppController', 'Controller');
/**
 * VoteQuestions Controller
 *
 * @property VoteQuestion $VoteQuestion
 * @property PaginatorComponent $Paginator
 */
class VoteQuestionsController extends AppController {

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
		$this->VoteQuestion->recursive = 0;
		$this->set('voteQuestions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VoteQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid vote question'));
		}
		$options = array('conditions' => array('VoteQuestion.' . $this->VoteQuestion->primaryKey => $id));
		$this->set('voteQuestion', $this->VoteQuestion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VoteQuestion->create();
			if ($this->VoteQuestion->save($this->request->data)) {
				$this->Flash->success(__('The vote question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vote question could not be saved. Please, try again.'));
			}
		}
		$users = $this->VoteQuestion->User->find('list');
		$questions = $this->VoteQuestion->Question->find('list');
		$this->set(compact('users', 'questions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VoteQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid vote question'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VoteQuestion->save($this->request->data)) {
				$this->Flash->success(__('The vote question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vote question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VoteQuestion.' . $this->VoteQuestion->primaryKey => $id));
			$this->request->data = $this->VoteQuestion->find('first', $options);
		}
		$users = $this->VoteQuestion->User->find('list');
		$questions = $this->VoteQuestion->Question->find('list');
		$this->set(compact('users', 'questions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VoteQuestion->id = $id;
		if (!$this->VoteQuestion->exists()) {
			throw new NotFoundException(__('Invalid vote question'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->VoteQuestion->delete()) {
			$this->Flash->success(__('The vote question has been deleted.'));
		} else {
			$this->Flash->error(__('The vote question could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
