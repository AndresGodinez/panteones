<?php
/**
 * TaxFixture
 *
 */
class TaxFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'smg' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '4,2', 'unsigned' => false),
		'amount' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '4,2', 'unsigned' => false),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'smg' => '',
			'amount' => '',
			'created' => '2015-12-13 14:42:05',
			'modified' => '2015-12-13 14:42:05'
		),
	);

}
