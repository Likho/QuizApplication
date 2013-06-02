<?php
class User extends AppModel{
    
    public $name = 'User';
    public $validate = array(
            'password' => array(
                'rule' => array('minLength', 6),
                'required' => true,
                'allowEmpty' => false
        ),
        'username' => array(
    			'rule' => array('minLength', 4),
    			'required' => true,
    			'allowEmty' => false,
                'unique' => array(
                    'rule' => 'isUnique',
                    'message' => 'Taken'
                )
			)
    );

    public function beforeSave($options = array()) {
       if(isset($this->data[$this->alias]['password'])) {
           $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
       }

       return true;
    }
}
?>