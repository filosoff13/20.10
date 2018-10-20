<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Results page</title>
</head>
<body>

<table border="1">
    <p>Первый вариант</p>
    <tr>
        <th> Номер заказа </th>
        <th> Имя товара </th>
        <th> Цена </th>
        <th> Количество </th>
        <th> Имя оператора </th>
    </tr>

    <?php foreach ($query as $value) {?>
        <tr>
            <th> <?=$value['id']?> </th>
            <th> <?=$value['name']?> </th>
            <th> <?=$value['price']?> </th>
            <th> <?=$value['count']?> </th>
            <th> <?=$value['op_name']?> </th>
        </tr>
    <?php } ?>
</table>

<div><a href="index.php">Import data</a></div>
<div><input type="submit" name="exportToCSV" value="Export to CSV"></div>
</body>
</html>