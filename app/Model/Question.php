<?php
App::uses('AppModel', 'Model');
/**
 * Question Model
 *
 * @property User $User
 * @property Answer $Answer
 */
class Question extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'category' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'question_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'VoteQuestion' => array(
			'className' => 'VoteQuestion',
			'foreignKey' => 'question_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function mostVoted($day,$category){
		$data = $this->find('all',array(
			'conditions' => array(
				array('category' => $category),
				array('date' => $day)
			),
			'fields' => array('Question.id'),
			'recursive' => -1
		));

		$mosVoted = $data[0]['Question']['id'];
		$points = $this->getVotes($data[0]['Question']['id']);

		foreach($data as $row){
			$tempo = $this->getVotes($row['Question']['id']);
			if( $tempo >= $points){
				$mosVoted = $row['Question']['id'];
				$points=$tempo;
			}
		}
		$mosVoted = $this->find('first',array('conditions' => array('Question.id' => $mosVoted),'recursive' => 0));
		$mosVoted['VoteQuestion'] = $points;
		return $mosVoted;
	}

	public function getLatest($day,$category,$amount){
		$latest = $this->find('all', array(
			'conditions' => array(
				array('category' => $category),
				array('date' => $day)
			),
			'order' => array('Question.id' => 'DESC'),
			'recursive' => 0,
			'limit' => $amount
		));
		$array = array();
		foreach($latest as $row){
			$row['VoteQuestion'] = $this->getVotes($row['Question']['id']);
			array_push($array,$row);
		}
		return $array;
	}

	public function getVotes($idQuestion){
		$pos = $this->query("SELECT COUNT(*) FROM vote_questions WHERE question_id=$idQuestion AND value = 1;");
		$neg = $this->query("SELECT COUNT(*) FROM vote_questions WHERE question_id=$idQuestion AND value = 0;");

		$posi = $pos[0][0]["COUNT(*)"];
		$nega = $neg[0][0]["COUNT(*)"];

		return $posi-$nega;
	}


}
