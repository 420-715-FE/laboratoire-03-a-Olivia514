<?php

include('dessin.php');

$matrice = $dessin;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art ASCII</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Art ASCII</h1>
    <pre>
        <?php

        // AJOUTEZ VOTRE CODE CI-DESSOUS
        // NE MODIFIEZ RIEN AVANT CETTE LIGNE
        
        for($i = 0; $i < count($dessin); $i++){
            for($j = 0; $j < count($dessin[$i]); $j++){
                echo $dessin[$i][$j];  
            }
            ?><br><?php
        }
        

        // NE MODIFIEZ RIEN APRÈS CETTE LIGNE

        ?>
    </pre>
</body>
</html>
