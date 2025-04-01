<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Suppression</h1>

    <?php


    $tableau = [];

    for($i = 0; $i <= 9; $i++){
        $tableau[] = rand(1, 100);
    }

    ?><h2>Avant</h2>
    
    <ol><?php

        foreach($tableau as $element){
            echo '<li>', $element, '</li>';
        }
        
    ?></ol><?php

    array_splice($tableau, 3, 1);

    ?><h2>Apres</h2>
    
    <ol><?php
    
        foreach($tableau as $element){
            echo '<li>', $element, '</li>';
        }
        
    ?></ol>




</body>
</html>
