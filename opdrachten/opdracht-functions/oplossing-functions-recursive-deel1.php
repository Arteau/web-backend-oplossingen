<?php

//    function renteBerekening($startKapitaal, $renteVoet, $periode)
//    {
//        $jaren = 1;
//        
//        if($jaren < $periode)
//        {
//            $bedrag = floor($startKapitaal + (($startKapitaal*$renteVoet)/100));
//            
//            $nieuwePeriode = $periode--;
//            
//            renteBerekening($bedrag, $renteVoet, $nieuwePeriode);
//        }
//    }

    

    function renteBerekening( $jaren, $startKapitaal, $rente ) 
    {   
        if ( $jaren == 0 ) 
        {
            return $startKapitaal;
        } 
        else 
        {
            $jaren = $jaren - 1;
            $berekendeRente = floor($startKapitaal * ($rente / 100));
            $nieuwKapitaal = $startKapitaal + $berekendeRente;
            echo "<p> ik heb nu € ". $startKapitaal. ". </p>";
            return renteBerekening($jaren, $nieuwKapitaal, $rente);
        }
    }

    $samengesteldeRente = renteBerekening(10,100000,8);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Recursive Functions: deel 1</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <p><?= "ik heb nu € ".$samengesteldeRente ?></p>
</body>
</html>