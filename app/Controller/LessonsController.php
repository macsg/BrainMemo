<?php

class LessonsController extends AppController {
    public function index($Categoryi=null) {
    	$this->loadModel('Category');
    	$categorys = $this->Category->find('all',['order'=>['Category.name'=>'ASC']]);
    	$this->set('categorys',$categorys);

    	$this->loadModel('Deck');
    	if($Categoryi!=null){
    		//$decks = $this->Deck->find('all',['conditions'=>['Deck.category_id'=>$Categoryi.id]]);
    	}
    	$decks = $this->Deck->find('all',['order'=>['Deck.modified'=>'DESC']]);
    	$this->set('decks',$decks);
    }


    public function learn() {

    }
}