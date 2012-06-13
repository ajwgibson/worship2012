<?php

/**
 * Extending the CakePHP Model class.
 */
class AppModel extends Model {

	/**
	 * Returns a datetime string formatted correctly for saving to database.
	 */
	function dateTimeFormatBeforeSave($dateTimeString) {    
		return date('Y-m-d H:i:s', strtotime($dateTimeString)); 
	}
	
	/**
	 * Returns a datetime string formatted correctly for display in this application.
	 */
	function dateTimeFormatAfterFind($dateTimeString) {    
		return date('d-m-Y H:i', strtotime($dateTimeString)); 
	}
}
