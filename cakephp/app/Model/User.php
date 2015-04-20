<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a username'
            )
        ),
        'firstname' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a firstname'
            )
        ),
        'lastname' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a lastname'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter an email'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a password'
            )
        ),
        'role' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a role'
            )
        ),
        'status' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a status'
            )
        )

    );

    public function beforeSave($options = array()) {
        if (!parent::beforeSave($options)) {
            return false;
        }
        if (isset($this->data[$this->alias]['password'])) {
            $hasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $hasher->hash(
                $this->data[$this->alias]['password']);
        }
        return true;
    }
}