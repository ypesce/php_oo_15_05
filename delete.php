<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=ravioles;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Echec de la connexion a la base de donnees ' . $e->getMessage ());
}
try {
	$id = $_GET['id'];
	$db->exec("DELETE FROM ravioles WHERE id='$id'");
	var_dump ($id);
}
catch(Exception $e) {
	echo $e->getMessage ();
}
function deletePlanet($db, $id)
{
	$delete = $db->prepare('DELETE FROM planets WHERE id = :id');
	$delete->execute(['id'=> $id]);
}
deletePlanet($db, $id);

header('Location: index.php');
