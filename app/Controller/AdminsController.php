<?php

class AdminsController extends AppController {
    public function index() {
            $this->layout = 'admin';
            $User = $this->Session->read('User');
            $this->set('User', $User);
    }

    public function usermanage(){
        $this->layout = 'admin';
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');
        $users = $this->User->find('all', array(
            'conditions' => array('User.status' => 1, 'User.role' => '2')
        ));
        pr($this->request->User);  
        $this->set('users', $users);
    }
    
}
?>