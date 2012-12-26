<?php

/** class to encapsulate the response return for in-game user request */
class KiwiResponse {
    public $rewards;
    
    //in case we create a new item on server, send its unque id to client
	public $item_id;
    public $parameters;
    public $source_resource_arrays;
    public $json_object;
	
    public function __construct(){
    }
    
    public function to_json_io(){
    	$str = '{"@type": "'.Kohana::$config->load('gameconfig.gameresponse_class').'", ';
    	if( ($this->rewards != null && sizeof($this->rewards) > 0)){
    		$str = $str . '"rewards":  [';
    		$keys = array_keys( $this->rewards );
    		foreach($keys as $key){
    			$str = $str . '{ "resourceId":"'. $key .'", "quantity":'. $this->rewards[$key].'},';
    		}
    		$str = substr($str, 0, -1);
			$str = $str . '],  ';
    	}
    	if( ($this->parameters != null && sizeof($this->parameters) > 0)){
    		$str = $str . '"parameters":  [';
    		$keys = array_keys( $this->parameters );
    		foreach($keys as $key){
    			$str = $str . '{ "key":"'. $key .'", "value":"'. $this->parameters[$key].'"},';
    		}
    		$str = substr($str, 0, -1);
    		$str = $str . '],  ';
    	}
    	if( ($this->source_resource_arrays != null && sizeof($this->source_resource_arrays) > 0)){
    		$str = $str . '"sourceResourceArrays":  [';
    		$keys = array_keys( $this->source_resource_arrays );
    		foreach($keys as $key){
    			if($this->source_resource_arrays[$key] != null && sizeof($this->source_resource_arrays[$key] > 0)) {
	    			$str = $str . '{ "key" : "'. $key .'", "value" : [ ';
	    			$sub_keys = array_keys( $this->source_resource_arrays[$key] );
	    			foreach($sub_keys as $sub_key) {
	    				$str = $str . '{ "resourceId" : "' . $sub_key . '", "quantity" : ' . $this->source_resource_arrays[$key][$sub_key] . '},';
	    			}
	    			$str = substr($str, 0, -1);
	    			$str = $str . '] },';
    			}
    		}
    		$str = substr($str, 0, -1);
    		$str = $str . '],  ';
    	}
    	if ($this->json_object != null) {
      		$str = $str . '"jsonObject":' .$this->json_object. ',';
    	}
    	$str = $str . '"itemId": "' .$this->item_id . '" }';
    	return $str;
    }

    public static function failed_response(){
    	return $str = '{"@type": "'.Kohana::$config->load('gameconfig.gameresponse_class').'", "failed": true } ';
    }
}

?>
