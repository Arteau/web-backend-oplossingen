<?php

    $getallenArray = array(1,2,3,4,5);
    $onevenGetallenArray = array();
    $getallenArrayLength = count($getallenArray);
    $reverseGetallen = array(5,4,3,2,1);
    $vermenigvuldigd = 1;

    for($i = 0; $i < $getallenArrayLength; $i ++)
    {
        $vermenigvuldigd *= $getallenArray[$i];
    }

    foreach($getallenArray as $value)
    {
        if($value %2 == 0)
        {
            //even
        }
        else
        {
            //oneven
            $onevenGetallenArray[] = $value;
        }
    }

    foreach($getallenArray as $key => $value)
    {
        $getal1 = $value;
        $getal2 = $reverseGetallen[$key];
        
        $opgeteldeGetallen[] = $getal1 + $getal2;
    }

?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays basis 2</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <p><?php echo $vermenigvuldigd; ?></p>
    <pre><?php print_r($onevenGetallenArray); ?></pre>
    <p>  __  </p>
    <pre><?php print_r($opgeteldeGetallen); ?></pre>
</body>
</html>