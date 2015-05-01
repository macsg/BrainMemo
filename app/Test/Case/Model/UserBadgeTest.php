<?php
App::uses('UserBadge', 'Model');

/**
 * UserBadge Test Case
 *
 */
class UserBadgeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_badge',
		'app.user',
		'app.deck',
		'app.category',
		'app.card',
		'app.deck_tag',
		'app.tag',
		'app.score',
		'app.badge'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserBadge = ClassRegistry::init('UserBadge');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserBadge);

		parent::tearDown();
	}

}
