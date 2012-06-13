<?php

/**
 * Helper class for song views.
 */
class SongHelper extends AppHelper {

    var $helpers = array('Html');

	/** 
     * Display an appropriate link or youtube frame
     */ 
    public function displayExample($url) {

		if ($url ===null) return "&nbsp;";
		
		$videoId = $this->parseVideoId($url);
		
		if ($videoId === null) {
			return $this->Html->link($url);
		} else {
			return sprintf(
				"<iframe width=\"420\" height=\"315\" src=\"http://www.youtube.com/embed/%s?rel=0\" frameborder=\"0\" allowfullscreen></iframe>",
				$videoId);
		}
		
    }
	
	
	/** 
     * Parse video id from url 
     */ 
    private function parseVideoId($url) { 
	
        //e.g. http://www.youtube.com/watch?v=UF6wdrRAZug&feature=relmfu     

        $urlQuery = parse_url($url, PHP_URL_QUERY); 
		
        if(!empty($urlQuery)) { 
            $parseArray = explode('&',$urlQuery); 
            foreach($parseArray as $key => $value) { 
                $explodeArray = explode('=',$value); 
                if($explodeArray[0] == 'v' && isset($explodeArray[1])) { 
                    return (string)$explodeArray[1]; 
                } 
            } 
        } 
		
		return null;
    } 
}

