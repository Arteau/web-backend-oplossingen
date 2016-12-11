<?php   
    $text = file_get_contents("text-file.txt");
    
    $textChars = str_split($text);
    rsort($textChars);
    $reversedTextChars = array_reverse($textChars);


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
    <title>Oplossing Looping Foreach: Deel 1</title>
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