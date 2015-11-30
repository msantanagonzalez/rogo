<?php
App::uses('VoteAnswer', 'Model');

/**
 * VoteAnswer Test Case
 */
class VoteAnswerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vote_answer',
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.vote_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VoteAnswer = ClassRegistry::init('VoteAnswer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VoteAnswer);

		parent::tearDown();
	}

}
