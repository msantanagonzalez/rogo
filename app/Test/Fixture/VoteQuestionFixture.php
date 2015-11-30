<?php
/**
 * VoteQuestion Fixture
 */
class VoteQuestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'value' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 32, 'unsigned' => false),
		'question_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 32, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'value' => 1,
			'user_id' => 1,
			'question_id' => 1
		),
	);

}
