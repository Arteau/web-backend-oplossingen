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

    $htmlContent = "<html><body>189196</body></html>";
    
    
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

    function validateHTML($html)
    {
        $valid = false;
        $startTag = "<html>";
        $endTag = "</html>";
        
        if(strpos($html, $startTag)===0)
        {
            $endPos = strlen($html)-strlen($endTag);
            
            if(strpos($html, $endTag)==$endPos)
            {
                $valid = true;
            }
            else
            {
                $valid = false;
            }
        }
        else
        {
            $valid = false;
        }
        
        return $valid;
    }

    $validatedHTML = validateHTML($htmlContent);

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
        <?php
                if($validatedHTML)
                {
                    echo "<p> html string is valid </p>";
                }
                else
                {
                    echo "<p> this html string is not valid </p>";
                }
        ?>
        <?php 
                foreach($afgedrukteArray as $value)
                {
                    echo "<p>".$value."</p>";
                }
        ?> 
        
    </body>
</html>