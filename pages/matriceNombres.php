<?php

$matrice = [];

// AJOUTEZ VOTRE CODE CI-DESSOUS

$matrice = [];
//$chiffre = 0;

for ($i = 0; $i < 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        if($j == 10){
            $k = $i + 1;
            $chiffre = $i + 1 . 0;
        }
        else{$chiffre = $i . $j;}
        $matrice[$i][$j] = $chiffre;
    }
}

// NE MODIFIEZ RIEN APRÈS CETTE LIGNE

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrice de nombres</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Matrice de nombres</h1>
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
