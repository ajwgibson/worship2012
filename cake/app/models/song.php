<?php
class Song extends AppModel {

	var $name = 'Song';
	var $displayField = 'title';
	var $order = "title";
	
	var $validate = array(
		'title' => array(
			'maxlength' => array(
				'rule' => array('maxlength', 100),
				'message' => 'The title cannot be more than 100 characters',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A title is required',
			),
		),
	);
	
	var $hasAndBelongsToMany = array(
		'Event'  => array('order' => 'starts')
	);
}
