<?php
App::uses('Deck', 'Model');

/**
 * Deck Test Case
 *
 */
class DeckTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deck',
		'app.user',
		'app.score',
		'app.user_badge',
		'app.badge',
		'app.category',
		'app.card',
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
		$this->Deck = ClassRegistry::init('Deck');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Deck);

		parent::tearDown();
	}

}
