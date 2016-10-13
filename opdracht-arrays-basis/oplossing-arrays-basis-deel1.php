<?php

    $dierenArray = array("slang", "nijlpaard", "hond", "eekhoorn", "wasbeer", "luiaard");
    $dierenArray[] = "arend";
    $dierenArray[] = "struisvogel";
    $dierenArray[] = "eend";
    $dierenArray[] = "walvis";

    $voertuigenArray = array(
            'landVoertuigen' => array(
                "auto",
                "trein"),
            'luchtVoertuigen' => array(
                "vliegtuig",
                "hete lucht ballon",
                "zeppelin"),
            'waterVoertuigen' => array(
                "duikboot",
                "catamaran",
                "schoener"));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays basis</title>
</head>
<body>
    <pre><?php print_r($voertuigenArray); ?></pre> 
</body>
</html>