<?php   
    $text = file_get_contents("text-file.txt");
    
    $textChars = str_split($text);
    rsort($textChars);
    $reversedTextChars = array_reverse($textChars);
    
    $alphabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

    $charCount = array();
    
//    for($i=0; $i<26; $i++ )
//    {
//        foreach($reversedTextChars as $character)
//        {
//            $charCount[$i] = substr_count($character, $alphabet[$i]);
//        }
//       
//    }

    foreach ($reversedTextChars as $value)
    {
        if(isset ($charCount[$value]))
        {
            $charCount[$value]++;
        }
        else
        {
            $charCount[$value] = 1;    
        }
    }

    

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
    <p>
    <?php echo $text; ?>
    </p>
    <p>
        <?php var_dump($charCount); ?>
    </p>
</body>
</html>