<?php
    $getal = 4;
    
    if($getal == 1)
    {
        $weekdag = "maandag";
    }
    else if($getal == 2)
    {
        $weekdag = "dinsdag";
    }    
    else if($getal == 3)
    {
        $weekdag = "woensdag";
    }    
    else if($getal == 4)
    {
        $weekdag = "donderdag";
    }    
    else if($getal == 5)
    {
        $weekdag = "vrijdag";
    }    
    else if($getal == 6)
    {
        $weekdag = "zaterdag";
    }    
    else if($getal == 7)
    {
        $weekdag = "zondag";
    }

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conditional Statements 1</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <p><?php echo $weekdag; ?></p>
</body>
</html>