<?php
class Musician extends AppModel {

	var $name = 'Musician';
	var $displayField = 'name';
	var $order = "name";
	
	var $validate = array(
		'name' => array(
			'maxlength' => array(
				'rule' => array('maxlength', 100),
				'message' => 'The name cannot be more than 100 characters',
			),
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);
	
	var $hasAndBelongsToMany = array(
		'Event' => array('order' => 'starts')
	);

}
