<?php

    $host = 'localhost';
    $db = 'exemple-heritage';
    $user = 'root';
    $password = '';

    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $db . '; charset=utf8', $user, $password);

?>