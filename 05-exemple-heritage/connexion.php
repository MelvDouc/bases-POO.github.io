<?php
session_start();

if(isset($_SESSION)){
        echo $_SESSION['notification'];
?>

<h2>Connexion</h2>

<div class="container">
    <div class="col-12">
        <p>Pas encore de compte ? <a href="./index.php">S'inscrire.</a></p>
    </div>
    <div class="col-6">
        <form action="./traitement.php?connexion" method="post" class="p-2 fond-grisclair">
            <?php
                $form_bootstrap->label_input('Nom d\'utilisateur', 'username', 'text');
                $form_bootstrap->label_input('Mot de passe', 'password', 'password');
                $form_bootstrap->checkbox('Rester connecté', 'stay-loggedin');
                $form_bootstrap->submit('Valider');
            ?>
        </form>
    </div>
</div>

<?php
}
?>