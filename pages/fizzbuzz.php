<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>FizzBuzz</h1>

    <?php
    $tableau = [];

    for($i = 1; $i <= 100; $i++){
        $tableau[] = $i;
    }

    for($i = 0; $i < 100; $i++){
        if ($tableau[$i] % 3 == 0 AND $tableau[$i] % 5 == 0){
            $tableau[$i] = 'FizzBuzz';
        }
        else if ($tableau[$i] % 3 == 0){
            $tableau[$i] = 'Fizz';
        }
        else if($tableau[$i] % 5 == 0){
            $tableau[$i] = 'Buzz';
        }
    }

    ?><ul><?php
        
    foreach($tableau as $element){
        echo '<li>', $element, '</li>';
    }
        
    ?></ul>





</body>
</html>
