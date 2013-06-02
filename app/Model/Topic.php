<?php
class Topic extends AppModel{

	public $name = 'Topic';
	public $actsAs = array('Containable');

	public $hasMany = array(
		'Question' => array(
			'className' => 'Question',
			'dependent' => true
		)
	);

	public $validate = array(
		'name' => array(
			'rule' => array('minLength',1),
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Topic name can not be empty'
		),
		'description' => array(
			'rule' => array('minLength',1),
			'required' => true,
			'allowEmpty' => false
		)
	);
}
?>