<?php
	require('Form.php');
	require('FormBootstrap.php');
	$form = new Form($_POST);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<title>05 - Exemple d'héritage</title>
</head>
<body>

	<h1>05 - Exemple d'héritage</h1>

	<form action="#">
		<?= $form->input('utilisateur');
		$form->input('motdepasse');
		$form->submit('Envoyer'); ?>

	</form>

</body>
</html>