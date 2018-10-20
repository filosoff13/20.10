<?php

require_once __DIR__.'/vendor/autoload.php';
use Dev\Load;

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
	// print_r(basename($_FILES['downloadField']['tmp_name']));
	$loadFile = new Load($_FILES['downloadField']['tmp_name']);
}
?>
</body>
</html>