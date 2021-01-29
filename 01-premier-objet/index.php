<?php

    require('legume.php');
    require('predateur.php');

    // $radis = new Legume();

    // var_dump($radis);
    // echo '<br>';
    // var_dump($radis->taille);

    // $radis->pousser(3);

    // var_dump($radis->feuilles);

    $courgette = new Legume('courgette');
    $carotte = new Legume('carotte');

    var_dump(/*$radis, */$courgette, $carotte);

    var_dump($courgette->estMort()); // false
    /*$courgette->feuilles = 0;
    var_dump($courgette->estMort()); // true*/

    $limace = new Predateur('limace', 1);

    $limace->attaquer($courgette);

    // if($courgette->estMort()){
    //     echo 'La courgette est morte.';
    // } else{
    //     echo 'La courgette est en vie.';
    // }

    $courgette->genre = 'f';

    function estMort($legume){
        if($legume->genre == 'm'){
            echo 'Le '.$legume->nom.' est mort.';
        } else{
            echo 'La '.$legume->nom.' est morte.';
        }
    }

    estMort($courgette);

    // var_dump($limace->obtenirNom()); // Permet d'obtenir le nom qui est en privé.