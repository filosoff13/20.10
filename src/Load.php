<?php declare(strict_types=1);

namespace Dev;
use Dev\Database;

$config = require_once 'config.php';
/**
 * class for loading and transfer .csv file into array
 */ 
//extends Database
class Load 
{
	
	protected $File;
	private $arrResult = [];

	function __construct($File)
	{

		$this->File = $File;
		$this->transformFile();
		
	}

	private function transformFile()
	{

		$i = 0;
		$handle = fopen($this->File, "r");
		if(empty($handle) === false) {
    		while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        	$arrResult[] = $data;
    		}
    	fclose($handle);
		}
	}

}


?>