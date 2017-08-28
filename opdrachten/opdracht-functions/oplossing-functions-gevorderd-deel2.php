<?php
    $pigHealth = 5;
    $maxThrows = 8;
    
    function calculateHit()
    {
        $hitRoll = rand(0,100);
        global $pigHealth;
        
        if($hitRoll<40)
        {
            $pigHealth--;
            $message = "<p>Raak! Er zijn nog maar ".$pigHealth." varkens over</p>";
            
        }
        else
        {
            $message = "<p> Mis! Nog ".$pigHealth." varkens in het team. </p>";    
        }
        
        return $message;       
    }

    function launchAngryBird()
    {
        static $launchAmount = 0;
        global $maxThrows;
        global $pigHealth;
        
        if($launchAmount < $maxThrows)
        {
            $launchAmount++;
            echo calculateHit();
            
            if($pigHealth != 0)
            {
                launchAngryBird();
            }
        }
    }

    launchAngryBird();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Functions Gevorderd: Deel 2</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
    <body>
    </body>
</html>