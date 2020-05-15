<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Echec de la connexion a la base de donnees');
}

echo 'test';
