<?


if(!empty($_POST['name'])) {

  $result = mysqli_query($connection, "SELECT name, price, category FROM produse INNER JOIN categorii ON produse.id_category=categorii.id_category");
  $id_category = mysqli_query($connection, "SELECT * FROM categorii WHERE id_category = '{$_GET['id_category']}'");
  $student = mysqli_fetch_assoc($id_category);
  $query1= mysqli_query($connection,"INSERT INTO produse SET id_category = '{$_POST['id_category']}'");

  if(mysqli_query($connection, "INSERT INTO produse SET name = '{$_POST['name']}',price = {$_POST['price']}")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Name <input type="text" name="name">
	<br>
	Price <input type="number" name="price">
    <br>
    Category <select name="category">
    <? while($category = mysqli_fetch_assoc($student)){?>
        <option value="<?= $category == $student['category'] ? 'selected' : ''?>" >
          <?= $category['category']?>
        </option>
    <?}?>
    </select>
	<br>
    <input type="submit">
</form>

<?}?>