<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Fibonacci</h1>

    <?php

    $fibonacci = [];
    $no1 = 0;
    $no2 = 1;
    $no3 = 0;

    for ($i = 0; $i <= 100; $i++){
        if($i == 0){$fibonacci[] = 0;}
        else{$fibonacci[] = $no1;}
        $no3 = $no2;
        $no2 = $no1 + $no2;
        $no1 = $no3;  
    }

    if (!isset($_GET['id']) OR (int) $_GET['id'] != $_GET['id'] OR $_GET['id'] < 0 OR $_GET['id'] > 100) {
        $id = 0;
    }
    else{
        $id = $_GET['id'];
    }

    if($id > 0){
        ?><a href="../pages/fibonacci.php?id=<?php echo $id - 1 ?>">- </a><?php
    }
    echo $fibonacci[$id];

    if($id < 99){
        ?><a href="../pages/fibonacci.php?id=<?php echo $id + 1 ?>"> +</a><?php
    }


    ?>






</body>
</html>
