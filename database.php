<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=ravioles;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Echec de la connexion a la base de donnees');
}


