<?php
App::uses('Card', 'Model');

/**
 * Card Test Case
 *
 */
class CardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.card',
		'app.deck',
		'app.user',
		'app.score',
		'app.user_badge',
		'app.badge',
		'app.category',
		'app.deck_tag',
		'app.tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Card = ClassRegistry::init('Card');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Card);

		parent::tearDown();
	}

}
