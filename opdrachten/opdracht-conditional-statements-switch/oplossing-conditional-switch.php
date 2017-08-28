<?php
    
    $dagNummer = 1;

    switch($dagNummer)
    {
        case 1:
            $weekdag = "maandag";
            break;
        case 2:
            $weekdag = "dinsdag";
            break;
        case 3:
            $weekdag = "woensdag";
            break;
        case 4:
            $weekdag = "donderdag";
            break;
        case 5:
            $weekdag = "vrijdag";
            break;
        case 6:
            $weekdag = "zaterdag";
            break;
        case 7:
            $weekdag = "zondag";
            break;
        default:
            $weekdag = "gelieve een nummer tussen 1 en 7 in te geven";
    }
    

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <p><?php echo $weekdag; ?></p>
</body>
</html>