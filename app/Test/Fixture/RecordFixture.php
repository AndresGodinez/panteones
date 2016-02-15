<?php
/**
 * RecordFixture
 *
 */
class RecordFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'titular_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '5,2', 'unsigned' => false),
		'tax_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'perpetuity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'titular_id' => 1,
			'amount' => '',
			'tax_id' => 1,
			'perpetuity_id' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'date' => '2015-12-13',
			'created' => '2015-12-13 15:07:47',
			'modified' => '2015-12-13 15:07:47'
		),
	);

}
