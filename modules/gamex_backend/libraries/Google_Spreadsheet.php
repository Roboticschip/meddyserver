<?php

/*

Copyright (c) 2009 Dimas Begunoff, http://www.farinspace.com/
http://www.farinspace.com/saving-form-data-to-google-spreadsheets/

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

class Google_Spreadsheet
{
	private $client;

	private $spreadsheet;
	private $spreadsheet_id;

	private $worksheet = "Sheet1";
	private $worksheet_id;

	function __construct($user,$pass,$ss=FALSE,$ws=FALSE)
	{
		$this->login($user,$pass);
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
		$this->worksheet = $ws;
		$this->worksheet_id = NULL;
	}

	function addRow($row)
	{
		if ($this->client instanceof Zend_Gdata_Spreadsheets)
		{
			$ss_id = $this->getSpreadsheetId($this->spreadsheet);

			if (!$ss_id) throw new Exception('Unable to find spreadsheet by name: "' . $this->spreadsheet . '", confirm the name of the spreadsheet');

			$ws_id = $this->getWorksheetId($ss_id,$this->worksheet);

			if (!$ws_id) throw new Exception('Unable to find worksheet by name: "' . $this->worksheet . '", confirm the name of the worksheet');

			$insert_row = array();

			foreach ($row as $k => $v) $insert_row[$this->cleanKey($k)] = $v;

			$entry = $this->client->insertRow($insert_row,$ss_id,$ws_id);

			if ($entry instanceof Zend_Gdata_Spreadsheets_ListEntry) return TRUE;
		}

		throw new Exception('Unable to add row to the spreadsheet');
	}

	// http://code.google.com/apis/spreadsheets/docs/2.0/reference.html#ListParameters
	function updateRow($row,$search)
	{
		if ($this->client instanceof Zend_Gdata_Spreadsheets AND $search)
		{
			$feed = $this->findRows($search);
			
			if ($feed->entries)
			{
				foreach($feed->entries as $entry) 
				{
					if ($entry instanceof Zend_Gdata_Spreadsheets_ListEntry)
					{
						$update_row = array();

						$customRow = $entry->getCustom();
						foreach ($customRow as $customCol) 
						{
							$update_row[$customCol->getColumnName()] = $customCol->getText();
						}
			
						// overwrite with new values
						foreach ($row as $k => $v) 
						{
							$update_row[$this->cleanKey($k)] = $v;
						}

						// update row data, then save
						$entry = $this->client->updateRow($entry,$update_row);
						if ( ! ($entry instanceof Zend_Gdata_Spreadsheets_ListEntry)) return FALSE;
					}
				}

				return TRUE;
			}
		}

		return FALSE;
	}

	// http://code.google.com/apis/spreadsheets/docs/2.0/reference.html#ListParameters
	function getRows($search=FALSE)
	{
		$rows = array();
		
		if ($this->client instanceof Zend_Gdata_Spreadsheets)
		{
			$feed = $this->findRows($search);
			
			if ($feed->entries)
			{
				foreach($feed->entries as $entry) 
				{
					if ($entry instanceof Zend_Gdata_Spreadsheets_ListEntry)
					{
						$row = array();
						
						$customRow = $entry->getCustom();
						foreach ($customRow as $customCol) 
						{
							$row[$customCol->getColumnName()] = $customCol->getText();
						}

						$rows[] = $row;
					}
				}
			}
		}

		return $rows;
	}

	// user contribution by dmon (6/10/2009)
	function deleteRow($search)
	{
		if ($this->client instanceof Zend_Gdata_Spreadsheets AND $search)
		{
			$feed = $this->findRows($search);
			
			if ($feed->entries)
			{
				foreach($feed->entries as $entry)
				{
					if ($entry instanceof Zend_Gdata_Spreadsheets_ListEntry)
					{
						$this->client->deleteRow($entry);
						
						if ( ! ($entry instanceof Zend_Gdata_Spreadsheets_ListEntry)) return FALSE;
					}
				}

				return TRUE;
			}
		}

		return FALSE;
	}

	function getColumnNames()
	{
		$query = new Zend_Gdata_Spreadsheets_ListQuery();
		$query->setSpreadsheetKey($this->getSpreadsheetId());
		$query->setWorksheetId($this->getWorksheetId());
		$query->setMaxResults(1);
		$query->setStartIndex(1);

		$feed = $this->client->getListFeed($query);

		$data = array();

		if ($feed->entries)
		{
			foreach($feed->entries as $entry) 
			{
				if ($entry instanceof Zend_Gdata_Spreadsheets_ListEntry)
				{
					$customRow = $entry->getCustom();

					foreach ($customRow as $customCol) 
					{
						array_push($data,$customCol->getColumnName());
					}
				}
			}
		}

		return $data;
	}

	private function login($user,$pass)
	{
		// Zend Gdata package required
		// http://framework.zend.com/download/gdata
		
		require_once 'Zend/Loader.php';
		Zend_Loader::loadClass('Zend_Http_Client');
		Zend_Loader::loadClass('Zend_Gdata');
		Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
		Zend_Loader::loadClass('Zend_Gdata_Spreadsheets');

		$service = Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME;
		$http = Zend_Gdata_ClientLogin::getHttpClient($user,$pass,$service);
		$this->client = new Zend_Gdata_Spreadsheets($http);

		if ($this->client instanceof Zend_Gdata_Spreadsheets) return TRUE;

		return FALSE;
	}

	private function findRows($search=FALSE)
	{
		$query = new Zend_Gdata_Spreadsheets_ListQuery();
		$query->setSpreadsheetKey($this->getSpreadsheetId());
		$query->setWorksheetId($this->getWorksheetId());

		if ($search) $query->setSpreadsheetQuery($search);

		$feed = $this->client->getListFeed($query);

		return $feed;
	}

	private function getSpreadsheetId($ss=FALSE)
	{
		
		if ($this->spreadsheet_id) return $this->spreadsheet_id;

		$ss = $ss?$ss:$this->spreadsheet;
		
		$ss_id = FALSE;
		
		$feed = $this->client->getSpreadsheetFeed();
		foreach($feed->entries as $entry) 
		{
			if ($entry->title->text == $ss)
			{
				$temp_arr = explode("/",$entry->id->text);
				$ss_id = array_pop( $temp_arr);

				$this->spreadsheet_id = $ss_id;

				break;
			}
		}

		return $ss_id;
	}

	private function getWorksheetId($ss_id=FALSE,$ws=FALSE)
	{
		if ($this->worksheet_id) return $this->worksheet_id;

		$ss_id = $ss_id?$ss_id:$this->spreadsheet_id;

		$ws = $ws?$ws:$this->worksheet;

		$wk_id = FALSE;

		if ($ss_id AND $ws)
		{
			$query = new Zend_Gdata_Spreadsheets_DocumentQuery();
			$query->setSpreadsheetKey($ss_id);
			$feed = $this->client->getWorksheetFeed($query);

			foreach($feed->entries as $entry) 
			{
				if ($entry->title->text == $ws)
				{
					$temp_arr = explode("/",$entry->id->text);
					$wk_id = array_pop( $temp_arr);

					$this->worksheet_id = $wk_id;

					break;
				}
			}
		}

		return $wk_id;
	}

	function cleanKey($k)
	{
		return strtolower(preg_replace('/[^A-Za-z0-9\-\.]+/','',$k));
	}
	
	public function downloadGeneralsheet($spreadsheet_name, $exclude, $path){
		$this->useSpreadsheet($spreadsheet_name);
		$ss_id = $this->getSpreadsheetId();
		$query = new Zend_Gdata_Spreadsheets_DocumentQuery();
		$query->setSpreadsheetKey($ss_id);
		$feed = $this->client->getWorksheetFeed($query);
		foreach($feed->entries as $entry)
		{
			$ws_name = $entry->title->text;
 			if($ws_name == $exclude){
 				print "Excluding the worksheet:  ".$ws_name."   <br>\n";
 				continue;
 			}
 			print "Downloaded the worksheet:  ".$ws_name."   <br>\n";
 			$myFile = $path."/".$ws_name.".csv";
 			$fh = fopen($myFile, 'w') or die("can't open file");
 				
			$cellFeed = $this->client->getCellFeed($entry);
			foreach ($cellFeed as $cellEntry) {
				$row = $cellEntry->getCell()->getRow();
				$column = $cellEntry->getCell()->getColumn();
				$value = $cellEntry->getCell()->getText();
				
				if($column == '1' && $row == '1'){
					$text = $value;
				}
				elseif($column == '1'){
					$text = "\n".$value;
				}else
					$text = ",".$value;
				fwrite($fh, $text);
			}
			fclose($fh);
		}
	}
	
	// Speicific function for Slots for downloading spreadsheet
	public function downloadSpreadsheet($spreadsheet_name, $path){
		$this->useSpreadsheet($spreadsheet_name);
		$ss_id = $this->getSpreadsheetId();
		$query = new Zend_Gdata_Spreadsheets_DocumentQuery();
		$query->setSpreadsheetKey($ss_id);
		$feed = $this->client->getWorksheetFeed($query);
		$zip = new ZipArchive();
		$destination = $path."/configs.zip";
		$overwrite = true;
		$config_version = "";
		$gotConfigDotZip = false;
		if($zip->open($destination, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return;
		}
		foreach($feed->entries as $entry)
		{
			$myFile = $path."/".$entry->title->text.".csv";
			$fh = fopen($myFile, 'w') or die("can't open file");
			
			$gotMetaFile = false;
			if($entry->title->text == "meta")
				$gotMetaFile = true;
			
			print "Downloaded the worksheet:  ".$entry->title->text."   <br>\n";
			$cellFeed = $this->client->getCellFeed($entry);
			foreach ($cellFeed as $cellEntry) {
				$row = $cellEntry->getCell()->getRow();
				$column = $cellEntry->getCell()->getColumn();
				$value = $cellEntry->getCell()->getText();
	
				if($gotConfigDotZip)
					$config_version = $value;
				
				if($gotMetaFile && $value == "configs.zip")
					$gotConfigDotZip = true;
				else
					$gotConfigDotZip = false;
				
				if($column == '1' && $row == '1'){
					$text = $value;
				}
				elseif($column == '1'){
					$text = "\n".$value;
				}else
					$text = ",".$value;
				fwrite($fh, $text);
			}
			fclose($fh);
			if($entry->title->text != "meta")
				$zip->addFile($myFile, $entry->title->text.".csv");
		}
		$zip->close();
		foreach($feed->entries as $entry)
		{
			if($entry->title->text != "meta"){
				$myFile = $path."/".$entry->title->text.".csv";
				unlink($myFile);
			}
		}
		if($config_version != null)
			rename($destination, $path."/".$config_version."_configs.zip");
	}
	
}
