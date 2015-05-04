<?php
App::uses('AppController', 'Controller');
/**
 * Cards Controller
 *
 * @property Card $Card
 * @property PaginatorComponent $Paginator
 */
class CardsController extends AppController {

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
		$this->Card->recursive = 0;
		$this->set('cards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Card->exists($id)) {
			throw new NotFoundException(__('Invalid card'));
		}
		$options = array('conditions' => array('Card.' . $this->Card->primaryKey => $id));
		$this->set('card', $this->Card->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
	$this->loadModel('Card');
	 $this->Card->create();
	
	if($this->request->is('POST')){
           // pr($this->request->data);
		$data = [
		'Card' => [
			'front' =>$this->request->data['Deck']['front'],
            'back' =>$this->request->data['Deck']['back'],
			'deck_id' => $this->Deck->getLastInsertId(),
			'created' => date("Y-m-d H:i:s"),
			'modified' => date("Y-m-d H:i:s")
		]];

		//pr($data);
		if ($this->Card->save($data)) {
				$this->Session->setFlash('Create Card success','default', 
				array("class" => 'alert alert-success'));
				return $this->redirect(array(
					'controller' => 'lesson',
					'action' => 'index'));
			} else {
				$this->Session->setFlash('Create Card fail','default', 
				array("class" => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Card->exists($id)) {
			throw new NotFoundException(__('Invalid card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Card->save($this->request->data)) {
				$this->Session->setFlash(__('The card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Card.' . $this->Card->primaryKey => $id));
			$this->request->data = $this->Card->find('first', $options);
		}
		$decks = $this->Card->Deck->find('list');
		$this->set(compact('decks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Card->id = $id;
		if (!$this->Card->exists()) {
			throw new NotFoundException(__('Invalid card'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Card->delete()) {
			$this->Session->setFlash(__('The card has been deleted.'));
		} else {
			$this->Session->setFlash(__('The card could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
