<?php

require_once __DIR__.'/vendor/autoload.php';
use Dev\Load;
use Dev\Database;

$config = require_once 'config.php';
$db = new Database($config);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Results page</title>
</head>
<body>

<?php
$dataFromBase = $db->query("SELECT uid FROM download_table");
if(empty($dataFromBase)) {
// if (!(isset($dataFromBase[0]['uid']))) {
	echo 'База данных пустая';
} else {
	$allDataFromBase = $db->query("SELECT * FROM download_table");
	// $db->closeConnection();
?>
<table border="1">
    <tr>
        <th> UID </th>
        <th> Name </th>
        <th> Age </th>
        <th> Phone </th>
        <th> Gender </th>
    </tr>

    <?php foreach ($allDataFromBase as $value) {?>
        <tr>
            <th> <?=$value['uid']?> </th>
            <th> <?=$value['name']?> </th>
            <th> <?=$value['age']?> </th>
            <th> <?=$value['phone']?> </th>
            <th> <?=$value['gender']?> </th>
        </tr>
    <?php }} ?>
</table>

<div><a href="index.php">Import data</a></div>
<div><input type="submit" name="exportToCSV" value="Export to CSV"></div>
</body>
</html>