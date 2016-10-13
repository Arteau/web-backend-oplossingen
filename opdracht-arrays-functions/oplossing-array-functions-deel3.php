
<?php

    $nummerArray = array(8, 7, 8, 7, 3, 2, 1, 2, 4);

    $resultNummerArray = array_unique($nummerArray);
    arsort($resultNummerArray);

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>array functions 3</title>

</head>

<body>
    <pre><?php print_r($resultNummerArray); ?></pre>
    

</body> 

</html>