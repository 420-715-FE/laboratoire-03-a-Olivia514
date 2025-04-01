<?php

$matrice = [];

// AJOUTEZ VOTRE CODE CI-DESSOUS

$matrice = [];

for ($i = 0; $i <= 9; $i++) {
    $matrice[] = [];
    for ($j = 9; $j > $i; $j--) {
        $matrice[$i][] = '';
        if($i == $j){return $j;}
    }
    for($k = 10 - $j; $k <= 10; $k++){
        $matrice[$i][$k] = '*';
    }
}

// NE MODIFIEZ RIEN APRÈS CETTE LIGNE

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrice d'étoiles v4</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Matrice d'étoiles v4</h1>
    <table>
        <?php

        foreach ($matrice as $ligne) {
            echo '<tr>';
            foreach ($ligne as $cellule) {
                echo "<td>$cellule</td>";
            }
            echo '</tr>';
        }

        ?>
    </table>
</body>
</html>
