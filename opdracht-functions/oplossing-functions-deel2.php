<?php
    
    $musicArray = Array (
        0 => Array ("Artist" => "Technimatic", "Track_ID" => "One Way"),
        1 => Array ("Artist" => "Nu:Logic", "Track_ID" => "Watercolours") ,
        2 => Array ("Artist" => "Keeno", "Track_ID" => "Borderless") );
    //bij het afdrukken van een multidimensionele array geeft hij een error "array to string conversion  ***


    $drankArray = Array (
        0 => "Glenfiddich",
        1 => "Jupiler",
        2 => "Chateauneuf du Pape",
        3 => "Pinot Gris"
    );
    
    
    //blijkbaar onmogelijk om de naam van een doorgegeven variabele te achterhalen in php... zie: http://stackoverflow.com/questions/4503443/original-variable-name-passed-to-function
    function drukArrayAf($array, $arrayNaam)
    {
        $returnArray = array();
        
        foreach($array as $key => $value)
        {
            $returnArray[] = $arrayNaam."[".$key."] heeft waarde ".$value; //*** hier array to string conversioàn error
        }
        return $returnArray;
    }

    $afgedrukteArray = drukArrayAf($drankArray, "drankArray");


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
        <?php foreach($afgedrukteArray as $value)
{
    echo "<li>".$value."</li>";
}?> 
    </body>
</html>