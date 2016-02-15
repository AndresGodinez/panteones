<?php
App::uses('Yearly', 'Model');

/**
 * Yearly Test Case
 *
 */
class YearlyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.yearly',
		'app.perpetuity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Yearly = ClassRegistry::init('Yearly');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Yearly);

		parent::tearDown();
	}

}
