<?php
class Practice extends AppModel {

	var $name = 'Practice';
	var $displayField = 'starts';
	var $order = "Practice.starts";
	
	var $belongsTo = array('Event');
	
	var $validate = array(
		'starts' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A start date and time is required',
			),
		),
		'venue' => array(
			'maxlength' => array(
				'rule' => array('maxlength', 100),
				'message' => 'The venue cannot be more than 100 characters',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'A venue is required',
			),
		),
	);
	
	/** 
	 * Performs pre-save logic
	 */
	function beforeSave($options) {
	
		if (!empty($this->data['Practice']['starts'])) {
				$this->data['Practice']['starts'] = $this->dateTimeFormatBeforeSave($this->data['Practice']['starts']);
		}
		
		if (!empty($this->data['Practice']['finishes'])) {
				$this->data['Practice']['finishes'] = $this->dateTimeFormatBeforeSave($this->data['Practice']['finishes']);
		}
		
		return true;
	}

	/** 
	 * Performs post-find logic
	 */
	function afterFind($results) {
	
		foreach ($results as $key => $val) {
			if (isset($val['Practice']['starts'])) {
				$results[$key]['Practice']['starts'] = $this->dateTimeFormatAfterFind($val['Practice']['starts']);
			}
			if (isset($val['Practice']['finishes'])) {
				$results[$key]['Practice']['finishes'] = $this->dateTimeFormatAfterFind($val['Practice']['finishes']);
			}
		}
		return $results;
	}
}
