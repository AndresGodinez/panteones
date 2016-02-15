<?php
App::uses('Deceased', 'Model');

/**
 * Deceased Test Case
 *
 */
class DeceasedTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deceased',
		'app.perpetuity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Deceased = ClassRegistry::init('Deceased');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Deceased);

		parent::tearDown();
	}

}
