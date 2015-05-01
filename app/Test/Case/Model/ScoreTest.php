<?php
App::uses('Score', 'Model');

/**
 * Score Test Case
 *
 */
class ScoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.score',
		'app.user',
		'app.deck',
		'app.category',
		'app.card',
		'app.deck_tag',
		'app.tag',
		'app.user_badge',
		'app.badge'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Score = ClassRegistry::init('Score');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Score);

		parent::tearDown();
	}

}
