<?php

    require('Escargot.php');
    require('Limace.php');

    $gary = new Escargot('Gary');
    $limace2 = new Limace('Limace2');
    // echo gettype($gary);
    var_dump($gary);
    var_dump($limace2);

    $limace2->attaque($gary);

    var_dump($gary);

    $lombric = new Ver('Lombric');
    var_dump($lombric);

?>