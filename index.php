<?php

require_once __DIR__.'/vendor/autoload.php';
use Dev\Load;
use Dev\Database;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>20_10_18</title>
</head>
<body>
<form name="myform" enctype="multipart/form-data" action="index.php" method="post">
	<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
	<input type="file" name="downloadField" accept="csv">
	<input type="submit" name="import" value="Import">
	<div><input type="submit" name="clearAllRecords" value="Clear all records"></div>
	<div><a href="page.php">View results</a></div>
</form>

<?php if (isset($_POST['import'])) {
	// here we can check the size
	// print_r(basename($_FILES['downloadField']['size']));
	// $loadFile = new Load($_FILES['downloadField']['tmp_name']);
	$loadFile = $_FILES['downloadField']['tmp_name'];

 function transformFile($File, $db)
	{
		$i = 0;
		$handle = fopen($File, "r");
		if(empty($handle) === false) {
    		while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        	$arrResult[] = $data;

        	if ($i == 0) {
        		$i++;
        		continue;
        	}
        	$i++;
        	$oldData = $db->query("SELECT uid FROM download_table WHERE uid = '$data[0]'");
        	
        	// print_r($oldData[0]['uid']);
        	if (isset($oldData[0]['uid']) && $data[0] == $oldData[0]['uid']) {
        		$db->query("DELETE FROM download_table WHERE uid = '$data[0]'");
        	}
        	
        	$query = $db->query("INSERT INTO download_table (uid, name, age, email, phone, gender) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]')");
        	
    		}
    	fclose($handle);
		}
	}

	$config = require_once 'config.php';
	$db = new Database($config);
	$arrResult = transformFile($loadFile, $db);


}
?>
</body>
</html>