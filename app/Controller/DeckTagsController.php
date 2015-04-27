<?php
App::uses('AppController', 'Controller');
/**
 * DeckTags Controller
 *
 * @property DeckTag $DeckTag
 * @property PaginatorComponent $Paginator
 */
class DeckTagsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DeckTag->recursive = 0;
		$this->set('deckTags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DeckTag->exists($id)) {
			throw new NotFoundException(__('Invalid deck tag'));
		}
		$options = array('conditions' => array('DeckTag.' . $this->DeckTag->primaryKey => $id));
		$this->set('deckTag', $this->DeckTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeckTag->create();
			if ($this->DeckTag->save($this->request->data)) {
				$this->Session->setFlash(__('The deck tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck tag could not be saved. Please, try again.'));
			}
		}
		$decks = $this->DeckTag->Deck->find('list');
		$tags = $this->DeckTag->Tag->find('list');
		$this->set(compact('decks', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DeckTag->exists($id)) {
			throw new NotFoundException(__('Invalid deck tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DeckTag->save($this->request->data)) {
				$this->Session->setFlash(__('The deck tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DeckTag.' . $this->DeckTag->primaryKey => $id));
			$this->request->data = $this->DeckTag->find('first', $options);
		}
		$decks = $this->DeckTag->Deck->find('list');
		$tags = $this->DeckTag->Tag->find('list');
		$this->set(compact('decks', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DeckTag->id = $id;
		if (!$this->DeckTag->exists()) {
			throw new NotFoundException(__('Invalid deck tag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DeckTag->delete()) {
			$this->Session->setFlash(__('The deck tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deck tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
