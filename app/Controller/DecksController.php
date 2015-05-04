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
	$id = $this->Session->read('Auth.User.id');
	$this->set('User', $id);
	$this->loadModel('Category');
	$categorys = $this->Category->find('all', [
		'order' => [
		'Category.name' => 'ASC'
		]
		]);
	$this->set('categorys', $categorys);



	$this->loadModel('Card');
	 $this->Card->create();
	
	
	


	if($this->request->is('POST')){
           // pr($this->request->data);
		$data = [
		'Deck' => [
		'name' => trim($this->request->data['Deck']['deckname']),
		'description' => trim($this->request->data['Deck']['description']),
		'status' => '1',
		'user_id' => $id,
		'category_id' => trim($this->request->data['Deck']['select']),
		'created' => date("Y-m-d H:i:s"),
		'modified' => date("Y-m-d H:i:s")] 


		];

		//pr($data);
		if ($this->Deck->save($data)) {

            $count = trim($this->request->data['Card']['hidden']);
			//$count = 2;

              for($i=1;$i <= $count ;$i++){
              		$category = $this->request->data['Card']['categories'];
              		$imgname = $this->request->data['Card']['picture'.$i];
              		$ans = $this->request->data['Card']['ans'.$i];
              		$data1 = [
              		'Card' => [
						'front' => $category."/".$imgname['name'] ,
            			'back' => $ans ,
						'deck_id' => $this->Deck->getLastInsertId(),
						'created' => date("Y-m-d H:i:s"),
						'modified' => date("Y-m-d H:i:s")]];

						//pr($data1);	
					if ($this->Card->saveAssociated($data1)) {
						move_uploaded_file($imgname['tmp_name'], WWW_ROOT . "/img/".$category."/".$i.".png");
					}
              } 
              

				// $this->Session->setFlash('Create lesson success','default', 
				// array("class" => 'alert alert-success'));
				// return $this->redirect(array(
				// 	'controller' => 'lesson',
				// 	'action' => 'index'));



			// } else {
			// 	$this->Session->setFlash('Create lesson fail','default', 
			// 	array("class" => 'alert alert-danger'));
			// }



			// if ($this->Card->save($data)) {
			// 	$this->Session->setFlash('Create Card success','default', 
			// 	array("class" => 'alert alert-success'));
			// 	return $this->redirect(array(
			// 		'controller' => 'lesson',
			// 		'action' => 'index'));
			// } else {
			// 	$this->Session->setFlash('Create Card fail','default', 
			// 	array("class" => 'alert alert-danger'));
			// }
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




 