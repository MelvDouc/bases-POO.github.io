<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>

    <h1>POO</h1>

    <?php
        $nombre = 1;
        $chaine = 'bonjour';   
        $tableau = ['clé' => 'valeur'];
    ?>

        <h2>Instanciation</h2>
        
    <?php
        $vase = new MonObjet('vase', 50);   
        $telephone = new MonObjet('téléphone', 10);
    ?>

        <h2>Propriétés</h2>

    <?php
        $vase->taille; // accède à la taille de $vase    
        $telephone->nom;

        $bdd->query();

        $vase->nettoyer();
    
    ?>
  
</body>
</html>