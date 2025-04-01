<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v2</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Tableau de nombres v2</h1>


    <?php

    $tableau = [];

    if (!isset($_GET['nombre']) OR !is_numeric($_GET['nombre'])) {
        
        for($i = 0; $i <= 20; $i++){
            if($i % 2 == 0){
                $tableau[] = $i;
            }
        }

        ?><ul><?php
        
            foreach($tableau as $element){
            echo '<li>', $element, '</li>';
            }
        
        ?></ul><?php
        
    }

        else{
            $nb = $_GET['nombre'];

            for($i = 0; $i <= $nb; $i++){
                if($i % 2 == 0){
                    $tableau[] = $i;
                }
            }

            ?><ul><?php
                
                foreach($tableau as $element){
                    echo '<li>', $element, '</li>';
                }
                
            ?></ul><?php 
            
            $nb = $nb + 10; 
            
            ?><a href="../pages/nombres2.php?nombre=<?php echo $nb ?>">recharger</a><?php
        }

    ?>

</body>
</html>
