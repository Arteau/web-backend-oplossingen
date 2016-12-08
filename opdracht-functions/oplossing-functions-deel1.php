<?php
    function berekenSom($getal1, $getal2)
    {
        $som = $getal1 + $getal2;
        return $som;
    }

    function vermenigvuldig($getal1, $getal2)
    {
        $product = $getal1 * $getal2;
        return $product;
    }

    function isEven($getal)
    {
        if($getal%2==0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Looping For: Deel 1</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
    <body>
    <p>
        <?= "De som van 4+5 = ".berekenSom(4, 5) ?>
    </p>
    <p>
        <?= "het product van 4x5 = ".vermenigvuldig(4,5) ?>
    </p>
    <p> het getal 4 is
       <?= ( iseven( 4 ) ) ? "even" : "oneven" ?>
    </p>
    
    </body>
</html>