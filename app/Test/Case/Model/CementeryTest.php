<?php
App::uses('Cementery', 'Model');

/**
 * Cementery Test Case
 *
 */
class CementeryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cementery',
		'app.perpetuity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cementery = ClassRegistry::init('Cementery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cementery);

		parent::tearDown();
	}

}
