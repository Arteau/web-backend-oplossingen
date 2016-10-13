<?php

    $dierenArray = array("paard", "hond", "kat", "hamster", "cavia");
    $aantalDieren = count($dierenArray);
    $teZoekenDier = "krab";
    $dierGevonden = false;

    foreach($dierenArray as $value)
    {
        if($teZoekenDier == $value)
        {
            $dierGevonden = true;
        }
    }

    if($dierGevonden)
    {
        $message="gevonden";
    }
    else
    {
        $message = "niet gevonden";
    }

    $sortedDierenArray = $dierenArray;
    sort($sortedDierenArray); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays functions 2</title>
</head>
<body>
    <pre><?php print_r($dierenArray); ?></pre>
    <p><?php echo "er zitten ".$aantalDieren." in de array"; ?></p>
    <p>__</p>
    <p><?php echo "het dier '".$teZoekenDier."' is ".$message." in de array"; ?></p>
    <p>__</p>
    <pre><?php print_r($sortedDierenArray); ?></pre>
</body>
</html>