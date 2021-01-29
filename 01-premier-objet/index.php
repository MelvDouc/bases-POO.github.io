<?php

    require('legume.php');

    $radis = new Legume();

    var_dump($radis);
    echo '<br>';
    var_dump($radis->taille);

    $radis->pousser(3);

    var_dump($radis->feuilles);