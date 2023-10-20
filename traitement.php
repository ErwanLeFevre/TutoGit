<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Test php</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <h1>Bonjour ! </h1>
    <?php
    
    $nom = $_REQUEST["nom"];
    $prenom = $_REQUEST["prenom"];
    $mdp = $_REQUEST["mdp"];
    echo $nom . " " . $prenom;
    
    ?>
    </body>
</html>   
