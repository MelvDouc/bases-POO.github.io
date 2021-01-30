<?php
	setcookie('Random1', $random1 = random_int(2,6));
	setcookie('Random2', $random2 = random_int(2,6));

	//\\//\\//\\//

	require('./Form.php');
	require('./FormBootstrap.php');
	$form = new Form($_POST);
	// var_dump($form);
	$form_bootstrap = new FormBootstrap($_POST);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require_once('./include/head.html');?>
	<title>05 - Exemple d'héritage</title>
</head>
<body>

	<h1 class="text-center text-light display-4 p-3">05 - Exemple d'héritage</h1>

	<?php
		if(isset($_GET['connexion'])){
			require_once('./connexion.php');
		} else if(isset($_GET['profil'])){
			require_once('./profil.php');
		} else{
	?>
	
	<h2>Inscription</h2>

	<h3 class="text-center">Simple formulaire</h3>

	<form action="#" class="ms-4">
		<?php
			$form->input('utilisateur');
			$form->input('motdepasse');
			$form->submit('Envoyer');
		?>
	</form>

	<h3 class="text-center">Formulaire Bootstrap</h3>
	
	<div class="container mb-3 rounded">
		<div class="col-12">
			<p>Déjà un compte ? <a href="index.php?connexion">Se connecter.</a></p>
		</div>

		<div class="col-6">
			<form action="./traitement.php?form-bootstrap" method="post" class="p-2 fond-grisclair" id="form-bootstrap">
				<?php
					$form_bootstrap->label_input('Nom d\'utilisateur', 'username', 'text');
					$form_bootstrap->label_input('Courriel', 'email', 'email');
					$form_bootstrap->label_input('Mot de passe', 'password', 'password');
					$form_bootstrap->label_input('Confirmer le mot de passe', 'confirm-password', 'password');
					$form_bootstrap->checkbox('Afficher les mots de passe', 'password-checkbox');
				?>
				<div class="mb-3">
					<label for="test" class="form-label">Combien font <?= $random1?> &times; <?= $random2?> ?</label>
					<input type="number" class="form-control" name="test" id="test">
				</div>
				<?php
					$form_bootstrap->checkbox('J\'ai lu et accepté les <a href="http://gutenberg.org/cache/epub/14155/pg14155.html#id00008" target="_blank">conditions d\'utilisation</a>.', 'terms');
					$form_bootstrap->submit('Envoyer');
				?>
			</form>
		</div>
	</div>

		<?php }?>

<script>			
	const enterPassword = document.querySelector('#password');
	const confirmPassword = document.querySelector('#confirm-password');
	const passwordCheckbox = document.querySelector('#password-checkbox');

	// Afficher mots de passe

	passwordCheckbox.addEventListener('click', function(){
		if(this.checked){
			enterPassword.type = 'text';
			confirmPassword.type = 'text';
		} else{
			enterPassword.type = 'password';
			confirmPassword.type = 'password';
		}
	})

	// Vérifier mots de passe

	function checkPassword(){
		if(enterPassword.value.length > 0 && confirmPassword.value.length > 0){
			if(enterPassword.value.length > confirmPassword.value.length){
				enterPassword.style.backgroundColor = '#fff';
				confirmPassword.style.backgroundColor = '#fff';
			}
			if(enterPassword.value.length <= confirmPassword.value.length && enterPassword.value != confirmPassword.value){
				enterPassword.style.backgroundColor = '#fff';
				confirmPassword.style.backgroundColor = 'red';
			}
			if(enterPassword.value == confirmPassword.value){
				enterPassword.style.backgroundColor = '#fff';
				confirmPassword.style.backgroundColor = '#13ed13';
			}
		} else if(enterPassword.value.length >= 0 && confirmPassword.value.length == 0){
			enterPassword.style.backgroundColor = '#fff';
			confirmPassword.style.backgroundColor = '#fff';
		} else{
			enterPassword.style.backgroundColor = '#ffcc66';
			confirmPassword.style.backgroundColor = '#fff';
		}
	}

	enterPassword.addEventListener('keyup', checkPassword);
	confirmPassword.addEventListener('keyup', checkPassword);
</script>
</body>
</html>