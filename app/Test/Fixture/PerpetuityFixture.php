<?php
/**
 * PerpetuityFixture
 *
 */
class PerpetuityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'folio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'titular_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'transfer' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'cementery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'measurement' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'condition_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'beneficiaryOne' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'beneficiaryTwo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'beneficiaryThree' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'nameNorth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'distanceNorth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'nameEsast' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'distanceEast' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'nameWest' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'distanceWest' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'nameSouth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'distanceSouth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
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
			'folio' => 'Lorem ipsum d',
			'titular_id' => 1,
			'transfer' => 'Lorem ipsum d',
			'cementery_id' => 1,
			'date' => '2015-12-13',
			'measurement' => 'Lorem ipsum d',
			'condition_id' => 1,
			'beneficiaryOne' => 'Lorem ipsum dolor sit amet',
			'beneficiaryTwo' => 'Lorem ipsum dolor sit amet',
			'beneficiaryThree' => 'Lorem ipsum dolor sit amet',
			'nameNorth' => 'Lorem ipsum dolor sit amet',
			'distanceNorth' => 'Lor',
			'nameEsast' => 'Lorem ipsum dolor sit amet',
			'distanceEast' => 'Lor',
			'nameWest' => 'Lorem ipsum dolor sit amet',
			'distanceWest' => 'Lor',
			'nameSouth' => 'Lorem ipsum dolor sit amet',
			'distanceSouth' => 'Lor',
			'created' => '2015-12-13 14:58:51',
			'modified' => '2015-12-13 14:58:51'
		),
	);

}
