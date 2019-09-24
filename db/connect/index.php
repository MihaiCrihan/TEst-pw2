<? 
	$connection = mysqli_connect("localhost", "root", "", "magazin");
	if (!$connection) {
	    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

//	$result = mysqli_query($connection, "SELECT * FROM magazin");


?>
<!doctype html>
<html>
<head></head>
<body>
	<table border="1">
	<<? while($products = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?= $products['name']?></td>
                <td><?= $products['price']?></td>
                <td><?= $products['category']?></td>
            </tr>
      <? }?>
</table>
</body>
</html>