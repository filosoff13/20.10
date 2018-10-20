<?php declare(strict_types=1);
namespace Dev;

/**
 * class for loading and transfer .csv file into array
 */
class Load
{
	
	protected $File;
	private $arrResult = [];

	function __construct($File)
	{
		// $File = 'users-1.csv';

		// $arrResult  = array();
		// print_r($File);
		$this->File = $File;
		$this->transformFile();
		
	}

	private function transformFile()
	{

		$handle     = fopen($this->File, "r");
		if(empty($handle) === false) {
    		while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        	$arrResult[] = $data;
    		}
    	fclose($handle);
		}
		print_r($arrResult);
	}
}

?>