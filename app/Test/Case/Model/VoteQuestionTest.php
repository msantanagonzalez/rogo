<?php
App::uses('VoteQuestion', 'Model');

/**
 * VoteQuestion Test Case
 */
class VoteQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vote_question',
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.vote_answer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VoteQuestion = ClassRegistry::init('VoteQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VoteQuestion);

		parent::tearDown();
	}

}
