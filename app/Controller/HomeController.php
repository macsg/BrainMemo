<?php

class HomeController extends AppController {
    public function index() {
        $user = $this->Session->read('User');
        $this->set('user, $user');
    }

}