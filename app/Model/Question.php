<?php
class Question extends AppModel{

	public $name = 'Question';
	public $actsAs = array('Containable');
	
	public $belongsTo = array(
		'Topic' => array(
			'className' => 'Topic',
		)
	);

	public $validate = array(
		'text' => array(
			'rule' => array('minLength', 1),
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Please enter question text'
		)
	);
}
?>