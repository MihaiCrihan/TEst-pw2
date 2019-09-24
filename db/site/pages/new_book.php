<?	
$result1 = mysqli_query($connection, "SELECT * FROM authors");

if(!empty($_POST['name'])) {
	
	$result = mysqli_query($connection, "SELECT author_name, NAME FROM books INNER JOIN AUTHORS ON books.id_book=AUTHORS.id_book");
	
	$query = mysqli_query($connection,"INSERT INTO books SET name = '{$_POST['name']}', year = {$_POST['year']}") ;
	$query1= mysqli_query($connection,"INSERT INTO authors SET author_name = '{$_POST['author_name']}'");

	if($query and $query1) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
	// (mysqli_query($connection,"INSERT INTO authors SET author_name = '{$_POST['author_name']}'"));
} else {
?>
<form action="" method="post">
	Name <input type="text" name="name">
	<br>
	Year <input type="number" name="year"> <br>
	Author <input type="text" name="author_name"> <br>
	<select name="authors_name">
		<? while($author = mysqli_fetch_assoc($result1)){?>
		<option value="<?= $author['author_name']?>" > 
			<?= $author['author_name']?> 
		</option>
		<?}?>
	</select> <br>
	<input type="submit">
<?}?>
</form>