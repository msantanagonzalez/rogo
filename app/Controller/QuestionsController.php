<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'Users');
/**
 * Questions Controller
 *
 * @property Question $Question
 * @property PaginatorComponent $Paginator
 */
class QuestionsController extends AppController {

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
			if(isset($this->request->params['named']['date'])){
				$day = $this->request->params['named']['date'];
			}else{
				$day = date("Y-m-d");
			}
			//echo $today;
			//$day = '2015-11-17'; //Sets the day
			$dataCarousel = array();

			//Get mostVoted on "Programacion"
			$mostVoted = $this->Question->mostVoted($day,'Programacion');
			$dataCarousel['Programacion'] = $mostVoted;
			//Get mostVoted on "Ciencia"
			$mostVoted = $this->Question->mostVoted($day,'Ciencia');
			$dataCarousel['Ciencia'] = $mostVoted;
			//Get mostVoted on "Deporte"
			$mostVoted = $this->Question->mostVoted($day,'Deporte');
			$dataCarousel['Deporte'] = $mostVoted;
			//Get mostVoted on "Arte"
			$mostVoted = $this->Question->mostVoted($day,'Arte');
			$dataCarousel['Arte'] = $mostVoted;
			//Get mostVoted on "Tecnologia"
			$mostVoted = $this->Question->mostVoted($day,'Tecnologia');
			$dataCarousel['Tecnologia'] = $mostVoted;


			//Get the lastest "Programacion" questions
			$dataProgramacion = $this->Question->getLatest($day,'Programacion',2);
			//Get the lastest "Ciencia" questions
			$dataCiencia = $this->Question->getLatest($day,'Ciencia',2);
			//Get the lastest "Deporte" questions
			$dataDeporte = $this->Question->getLatest($day,'Deporte',2);
			//Get the lastest "Arte" questions
			$dataArte = $this->Question->getLatest($day,'Arte',2);
			//Get the lastest "Tecnologia" questions
			$dataTecnologia = $this->Question->getLatest($day,'Tecnologia',2);

			$this->set('date', $day);
			$this->set('questionsCarousel', $dataCarousel);
			$this->set('questionsProgramacion', $dataProgramacion);
			$this->set('questionsCiencia', $dataCiencia);
			$this->set('questionsDeporte', $dataDeporte);
			$this->set('questionsArte', $dataArte);
			$this->set('questionsTecnologia', $dataTecnologia);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid question'));
		}
		$options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
		$this->set('question', $this->Question->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Question->create();
			if ($this->Question->save($this->request->data)) {
				$this->Flash->success(__('The question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The question could not be saved. Please, try again.'));
			}
		}
		$users = $this->Question->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid question'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Question->save($this->request->data)) {
				$this->Flash->success(__('The question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
			$this->request->data = $this->Question->find('first', $options);
		}
		$users = $this->Question->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Question->id = $id;
		if (!$this->Question->exists()) {
			throw new NotFoundException(__('Invalid question'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Question->delete()) {
			$this->Flash->success(__('The question has been deleted.'));
		} else {
			$this->Flash->error(__('The question could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
