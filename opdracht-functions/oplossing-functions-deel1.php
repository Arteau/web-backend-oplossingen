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
    
    function printEvenOneven($bool)
    {
        if($bool)
        {
            echo "even";
        }
        else
        {
            echo "oneven";
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
        <?php echo "De som van 4+5 = ".berekenSom(4, 5); ?>
    </p>
    <p>
        <?php echo "het product van 4x5 = ".vermenigvuldig(4,5); ?>
    </p>
    <p>
       <?php echo "het getal 4 is ".printEvenOneven(iseven(4))."."; ?>
    </p>
    
    </body>
</html>