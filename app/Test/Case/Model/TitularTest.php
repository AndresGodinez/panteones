<?php
App::uses('Titular', 'Model');

/**
 * Titular Test Case
 *
 */
class TitularTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.titular',
		'app.perpetuity',
		'app.record'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Titular = ClassRegistry::init('Titular');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Titular);

		parent::tearDown();
	}

}
