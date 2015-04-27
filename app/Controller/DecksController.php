<?php
App::uses('AppController', 'Controller');
/**
 * Decks Controller
 *
 * @property Deck $Deck
 * @property PaginatorComponent $Paginator
 */
class DecksController extends AppController {

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
		$this->Deck->recursive = 0;
		$this->set('decks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deck->exists($id)) {
			throw new NotFoundException(__('Invalid deck'));
		}
		$options = array('conditions' => array('Deck.' . $this->Deck->primaryKey => $id));
		$this->set('deck', $this->Deck->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Deck->create();
			if ($this->Deck->save($this->request->data)) {
				$this->Session->setFlash(__('The deck has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck could not be saved. Please, try again.'));
			}
		}
		$users = $this->Deck->User->find('list');
		$categories = $this->Deck->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Deck->exists($id)) {
			throw new NotFoundException(__('Invalid deck'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Deck->save($this->request->data)) {
				$this->Session->setFlash(__('The deck has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Deck.' . $this->Deck->primaryKey => $id));
			$this->request->data = $this->Deck->find('first', $options);
		}
		$users = $this->Deck->User->find('list');
		$categories = $this->Deck->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Deck->id = $id;
		if (!$this->Deck->exists()) {
			throw new NotFoundException(__('Invalid deck'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Deck->delete()) {
			$this->Session->setFlash(__('The deck has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deck could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
