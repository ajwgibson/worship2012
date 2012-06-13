<?php
class Event extends AppModel {
	
	var $name = 'Event';
	var $displayField = 'name';
	var $order = "starts";
	
	var $hasMany = array(
		'Practice'  => array('order' => 'starts')
	);
	
	var $hasAndBelongsToMany = array(
		'Musician' => array('order' => 'name'), 
		'Song'     => array('order' => 'title')
	);
	
	var $validate = array(
		'name' => array(
			'maxlength' => array(
				'rule' => array('maxlength', 100),
				'message' => 'The name cannot be more than 100 characters',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A name is required',
			),
		),
	);

	/** 
	 * Performs pre-save logic
	 */
	function beforeSave($options) {
	
		if (!empty($this->data['Event']['starts'])) {
				$this->data['Event']['starts'] = $this->dateTimeFormatBeforeSave($this->data['Event']['starts']);
		}
		
		if (!empty($this->data['Event']['finishes'])) {
				$this->data['Event']['finishes'] = $this->dateTimeFormatBeforeSave($this->data['Event']['finishes']);
		}
		
		return true;
	}

	/** 
	 * Performs post-find logic
	 */
	function afterFind($results) {
	
		foreach ($results as $key => $val) {
			if (isset($val['Event']['starts'])) {
				$results[$key]['Event']['starts'] = $this->dateTimeFormatAfterFind($val['Event']['starts']);
			}
			if (isset($val['Event']['finishes'])) {
				$results[$key]['Event']['finishes'] = $this->dateTimeFormatAfterFind($val['Event']['finishes']);
			}
		}
		return $results;
	}

}
