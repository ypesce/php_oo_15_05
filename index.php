<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=ravioles;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Echec de la connexion a la base de donnees ' . $e->getMessage ());
}
include_once 'header.php'
?>
	<p>Recettes:</p>
<?php
$callback = $db->query('SELECT * FROM ravioles');
while ($data = $callback->fetch()) {
	?>
	<div class="grid">
		<div class="a"><?php echo $data['title'] ?></div>
		<div class="b"><?php echo $data['description'] ?></div>
		<div class="c"><?php echo $data['date'] ?></div>
		<div class="d"><img src="<?php echo $data['img_link']?>"></div>
        <div class="e"><a href="delete.php?id=<?php echo($data['id']);?>">Delete</a></div>
	</div>

	<?php
}
$callback->closeCursor ();
