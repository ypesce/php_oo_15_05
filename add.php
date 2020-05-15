<html>
<head>
	<title>Ajout de recette de ravioles</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div>
	<h1>Ajout de recette de ravioles</h1>
	<div>
		<h2>/h2>
		<hr/>
		<form action="" method="post">
			<label>Nom: </label>
			<input type="text" name="title" id="title" required="required"><br /><br />
			<label>Description:</label>
			<input type="text" name="description" id="description" required="required"><br/><br />
			<label>Date</label>
			<input type="date" name="date" id="date" required="required"/><br/><br />
			<label>Img link:</label>
			<input type="text" name="img_link" id="img_link" required="required"/><br/><br />
			<input type="submit" value="Submit" name="submit"/><br />
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