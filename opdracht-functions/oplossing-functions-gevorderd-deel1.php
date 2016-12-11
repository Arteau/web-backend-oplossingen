<?php
    $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
    
    function checkOccurrence1($string, $needle)
    {
        $stringLength =  strlen($string);

		$needleOccurrence = substr_count ($string, $needle);

		$occurenceProcent = ( $needleOccurrence / $stringLength ) * 100;
        
        return $occurenceProcent;
    }
    
    function checkOccurrence2($needle)
    {
        $string = $GLOBALS['md5HashKey'];
        
        $stringLength =  strlen($string);

		$needleOccurrence = substr_count ($string, $needle);

		$occurenceProcent = ( $needleOccurrence / $stringLength ) * 100;
        
        return $occurenceProcent;
    }

    function checkOccurrence3($needle)
    {
        global $md5HashKey;
        $string = $md5HashKey;
        
        $stringLength =  strlen($string);

		$needleOccurrence = substr_count ($string, $needle);

		$occurenceProcent = ( $needleOccurrence / $stringLength ) * 100;
        
        return $occurenceProcent;
        
    }

    $result1 = checkOccurrence1($md5HashKey, '2');
    $result2 = checkOccurrence2('8');
    $result3 = checkOccurrence3('a');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Functions Gevorderd: Deel 1</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
    <body>
       <p><?= "Functie 1: De needle '2' komt ".$result1." voor in de hash key ".$md5HashKey ?></p>
       <p><?= "Functie 2 De needle '8' komt ".$result2." voor in de hash key ".$md5HashKey ?></p>
       <p><?= "Functie 3: De needle 'a' komt ".$result3." voor in de hash key ".$md5HashKey ?></p>
    </body>
</html>