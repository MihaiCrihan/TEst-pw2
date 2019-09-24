<?
if(isset($_GET['id_prod']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM produse WHERE id_prod = {$_GET['id_prod']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}

  $result = mysqli_query($connection, "SELECT name, price, category FROM produse INNER JOIN categorii ON produse.id_category=categorii.id_category");
?>
<table border="1">
<? while($products = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $products['name']?></td>
	<td><?= $products['price']?></td>
	<td><?= $products['category']?></td>
	<td>
    <a href="?page=product_list&action=delete&id_prod=<?= $student['id_prod']?>" onclick="return confirm('Doriti sa stergeti inregistrarea?')">X</a>
    <a href="?page=edit&id_prod=<?= $student['id_prod']?>">M</a>
  </td>
</tr>
<? }?>