<?php
App::uses('Perpetuity', 'Model');

/**
 * Perpetuity Test Case
 *
 */
class PerpetuityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.perpetuity',
		'app.titular',
		'app.record',
		'app.cementery',
		'app.condition',
		'app.deceased',
		'app.yearly'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Perpetuity = ClassRegistry::init('Perpetuity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Perpetuity);

		parent::tearDown();
	}

}
