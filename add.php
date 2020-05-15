<html>
<head>
	<title>Ajout de recette de ravioles</title>
</head>
<body>
<?php
include_once 'header.php'
?>
<div>

	<h1>Ajout de recette de ravioles</h1>
	<div
		<hr/>
		<form class="form" action="" method="post">
			<label>Nom: </label>
			<input class="form-control" type="text" name="title" id="title" required="required"><br /><br />
			<label>Description:</label>
			<input class="form-control" type="text" name="description" id="description" required="required"><br/><br />
			<label>Date</label>
			<input class="form-control" type="date" name="date" id="date" required="required"/><br/><br />
			<label>Img link:</label>
			<input class="form-control" type="text" name="img_link" id="img_link" required="required"/><br/><br />
			<input  class="btn btn-primary" type="submit" value="Submit" name="submit"/><br />
		</form>
	</div>

</div>
<?php
if(isset($_POST["submit"])){

	try {
		$db = new PDO("mysql:host=localhost;dbname=ravioles",'root','');

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO ravioles(title, description, date, img_link)
VALUES ('".$_POST["title"]."','".$_POST["description"]."','".$_POST["date"]."','".$_POST["img_link"]."')";
		if ($db->query($sql)) {
			echo 'IT\'S ALIVE (Ajouter de nouvelles recettes ou retournez consulter nos délicieuses recettes';
		}
		else{
			echo 'samarch pas :c';
		}

		$db = null;
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

}


?>

</body>
</html>