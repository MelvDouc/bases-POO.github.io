<?php

    require('./Text.php');

    $text = new Text();
    // var_dump($text->ajoutZero());

    // var_dump(Text::ajoutZeroPrivate(5)); // erreur
   
    print_r(Text::ajoutZeroPublic(5));
    echo '<hr>';
    print_r(Text::ajoutZeroPublic(164116681));

?>