
<?php

    $getal = 55;
    
    if($getal <= 10)
    {
        $message = "het getal ".$getal." ligt tussen 0 en 10";
    }
    else if($getal <= 20)
    {
        $message = "het getal ".$getal." ligt tussen 10 en 20";
    }
    else if($getal <= 30)
    {
        $message = "het getal ".$getal." ligt tussen 20 en 30";
    }
    else if($getal <= 40)
    {
        $message = "het getal ".$getal." ligt tussen 30 en 40";
    }
    else if($getal <= 50)
    {
        $message = "het getal ".$getal." ligt tussen 40 en 50";
    }
    else if($getal <= 60)
    {
        $message = "het getal ".$getal." ligt tussen 50 en 60";
    }
    else if($getal <= 70) 
    {
        $message = "het getal ".$getal." ligt tussen 60 en 70";
    }
    else if($getal <= 80)
    {
        $message = "het getal ".$getal." ligt tussen 70 en 80";
    }
    else if($getal <= 90)
    {
        $message = "het getal ".$getal." ligt tussen 80 en 90";
    }
    else if($getal <= 100)
    {
        $message = "het getal ".$getal." ligt tussen 90 en 100";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Else if</title>
</head>
<body>
    <p><?php echo $message; ?></p>
</body>
</html>