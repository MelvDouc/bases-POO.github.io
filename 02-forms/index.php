<?php require('./Form.php');?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Forms</title>
</head>

<body>

    <?php
        $form = new Form(array('utilisateur' => 'Melv'));
        var_dump($form);

        $form->balise = 'p';

        // echo($form->input('utilisateur'));
        // echo($form->input('age'));
        // echo($form->submit('Envoyer'));

        $form2 = new Form($_POST);
    ?>

    <form action="#">
        <?php
           echo($form->input('utilisateur'));
           echo($form->input('age'));
           echo($form->submit('Envoyer')); 
        ?>
    </form>

    <form action="#">
        <?php
           echo($form2->input('utilisateur'));
           echo($form2->input('age'));
           echo($form2->submit('Envoyer')); 
        ?>
    </form>
</body>
</html>