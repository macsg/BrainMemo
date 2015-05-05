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
        $this->loadModel('Category');
        $cats = $this->Category->find('all');
        $this->set('cats', $cats);
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

    public function editCat($id = null) {
        $this->loadModel('Category');
        if ($this->request->is(array('post', 'put'))) {
            $data = [
                'Category' => [
                    'id' => $id,
                    'name' => $this->request->data['Category']['name']
                ]
            ];
            if ($this->Category->save($data)) {
                $this->Session->setFlash(__('The category has been saved.'));
                return $this->redirect(array('action' => 'admins', 'action' => 'managecategory'));
            } else {
                $this->Session->setFlash(__('The category could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
            $this->request->data = $this->Category->find('first', $options);
        }
    }

    public function deleteUser($id = null) {
        $User = $this->Session->read('User');
        $this->set('User', $User);
        $this->loadModel('User');      
        if ($this->User->delete($id)) {
            $this->redirect(['controller' =>'admins','action' => 'managecategory']);
            $this->Session->setFlash("Remove user".$User['User']['username']);
        }
        else {
            $this->Session->setFlash("ERROR: Cannot delete this user.");
        }
    }

    public function deleteCat($id = null) {
        $this->loadModel('Category');

        if ($this->Category->delete($id)) {
            $this->redirect(['controller' =>'admins','action' => 'managecategory']);
            $this->Session->setFlash(__("Remove aCategory sucessfully"));
        }
        else {
            $this->Session->setFlash("ERROR: Cannot delete this user.");
        }
    }
}
?>