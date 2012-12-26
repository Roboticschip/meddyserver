<?php

/*

achandel@kiwiup.com 

*/

class Local_Spreadsheet
{
	
	private static $field_separator = "__--+--__";
	private static $line_separator = "++__--__++\n";
	private static $spreadsheet_dir = "/opt/data/spreadsheets/";
	
	private $client;

	private $spreadsheet;
	private $spreadsheet_id;

	private $worksheet = "Sheet1";
	private $worksheet_id;
	private $rows = array();
	private $columns = null;
	
	function get_file_path(){
		return static::$spreadsheet_dir . $this->spreadsheet . "/" . $this->worksheet;
	}
	
	function __construct($ss=FALSE,$ws=FALSE)
	{
		if ($ss) $this->useSpreadsheet($ss);
		if ($ws) $this->useWorksheet($ws);
	}

	function useSpreadsheet($ss,$ws=FALSE)
	{
		$this->spreadsheet = $ss;
		$this->spreadsheet_id = NULL;
		if ($ws) $this->useWorksheet($ws);
	}

	function useWorksheet($ws)
	{
		$this->rows = array();
		$this->columns = null;
		$this->worksheet = $ws;
		$this->worksheet_id = NULL;
	}

	function getRows()
	{
		//convert the csv spreadsheet into array		
		$csvData = file_get_contents( $this->get_file_path());
		$lines = explode( static::$line_separator, $csvData);
		// first line is the column heading
		$this->columns = array_shift($lines);
		$this->columns = explode(static::$field_separator, $this->columns);
		foreach($lines as $l){
			$fields = explode(static::$field_separator, $l);
			$newRow = array();
			$gotNotNullColumn = false;
			for( $i=0; $i < sizeof($fields); $i++){
				$newRow[ str_replace("_", "", $this->columns[$i] ) ] = trim($fields[$i]);
				if($fields[$i] !== "null" && $fields[$i] !== null ){
					$gotNotNullColumn = TRUE;
				}else{
					$newRow[ str_replace("_", "", $this->columns[$i] ) ] = null;
				}
			}
			if($gotNotNullColumn){
				$gotNonEmptyColumn = false;
                		foreach($newRow as $value){
                    			if($value !== null && $value === "")
                        			continue;
                    			$gotNonEmptyColumn = true;
                    			break;
                		}
                		if($gotNonEmptyColumn == true){
					$this->rows[] = $newRow;
				}
			}
		}
		return $this->rows;
	}


	function getColumnNames()
	{
		//get column names after reading it from file
		if( sizeof($this->rows) < 1){
			$this->getRows();
		}
		return $this->columns;
	}

	
}
