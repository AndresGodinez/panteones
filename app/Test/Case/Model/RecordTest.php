<?php
App::uses('Record', 'Model');

/**
 * Record Test Case
 *
 */
class RecordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.record',
		'app.titular',
		'app.perpetuity',
		'app.cementery',
		'app.condition',
		'app.deceased',
		'app.yearly',
		'app.tax'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Record = ClassRegistry::init('Record');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Record);

		parent::tearDown();
	}

}
