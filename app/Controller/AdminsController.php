<?php

class AdminsController extends AppController {
    public function index() {
            $this->layout = 'admin';
            $User = $this->Session->read('User');
            $this->set('User', $User);
    }

    public function manageuser(){
        $this->layout = 'admin';
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');
        $users = $this->User->find('all', array(
            'conditions' => array('User.role' => '2')
        ));
        pr($this->request->User);  
        $this->set('users', $users);
    }

    public function managecategory(){
        $this->layout = 'admin';
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');
        $users = $this->User->find('all', array(
            'conditions' => array('User.role' => '2')
        ));
        pr($this->request->User);  
        $this->set('users', $users);
    }
    
    public function managelesson(){
        $this->layout = 'admin';
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');
        $users = $this->User->find('all', array(
            'conditions' => array('User.role' => '2')
        ));
        pr($this->request->User);  
        $this->set('users', $users);
    }

    public function ban($id=null){
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');
        $data = [
            'User' => [
                'id' => $id,
                'status' => '2'
            ]
        ];
        if ($this->User->save($data)) {
            $this->Session->setFlash('User is banned.', 'default', array("class" => 'alert alert-success'));
            $this->redirect(['controller' =>'admins','action' => 'usermanage']);
        } else {
            $this->Session->setFlash('Error: cannot ban this account!', 'default', array("class" => 'alert alert-danger'));
        }
        $this->set('id', $id);        
    }

    public function unban($id=null){
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');
        $data = [
            'User' => [
                'id' => $id,
                'status' => '1'
            ]
        ];
        if ($this->User->save($data)) {
            $this->Session->setFlash('User is unbanned.', 'default', array("class" => 'alert alert-success'));
            $this->redirect(['controller' =>'admins','action' => 'usermanage']);
        } else {
            $this->Session->setFlash('Error: cannot unban this account!', 'default', array("class" => 'alert alert-danger'));
        }
        $this->set('id', $id);     
    }

    public function delete($id = null) {
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');      
        if ($this->User->delete($id)) {
            $this->redirect(['controller' =>'admins','action' => 'usermanage']);
            $this->Session->setFlash("Remove user".$users['User']['username']);
        }
        else {
            $this->Session->setFlash("ERROR: Cannot delete this transaction.");
        }
    }    
}
?>