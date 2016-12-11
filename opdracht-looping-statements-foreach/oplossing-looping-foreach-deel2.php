<?php
    $text = file_get_contents("text-file.txt");
    $alphabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

    $textChars = str_split($text);
    $charCount = array();

 
    foreach($textChars as $character)
    {
        $charCount[] = substr_count($text, $character);
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Looping Foreach: Deel 2</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
    <body>
    <?php  
        for($i = 0; $i<26; $i++)
    {
        $message = $alphabet[$i]." = ".$charCount[$i];
            echo "<p>".$message."</p>";
    } ?>
    </body>
</html>