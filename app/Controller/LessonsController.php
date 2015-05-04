<?php

class LessonsController extends AppController {
    public function index() {
    	$this->loadModel('Category');
    		$categorys = $this->Category->find('all',[
    			'order'=>[
    				'Category.name'=>'ASC'
    			]
    		]);
    		$this->set('categorys',$categorys);

    	$this->loadModel('Deck');
    		$decks = $this->Deck->find('all',['order'=>['Deck.name'=>'ASC']]);
    		$this->set('decks',$decks);

    }

    public function learn() {

    }
}