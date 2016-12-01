<?php
    $aantalSeconden = 2015667891;
    $aantalMinuten = ceil($aantalSeconden/60);
    $aantalUren = ceil($aantalMinuten/60);
    $aantalDagen = ceil($aantalUren/24);
    $aantalWeken = ceil($aantalDagen/7);
    $aantalMaanden = ceil($aantalDagen/31);
    $aantalJaren = ceil($aantalDagen/365);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if else 2</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <h2><?php echo "in ".$aantalSeconden." seconden zitten:"; ?></h2>
    <p><?php echo $aantalMinuten." minuten"; ?></p>
    <p><?php echo $aantalUren." uren"; ?></p>
    <p><?php echo $aantalDagen." dagen"; ?></p>
    <p><?php echo $aantalWeken." weken"; ?></p>
    <p><?php echo $aantalMaanden." maanden"; ?></p>
    <p><?php echo $aantalJaren." jaren"; ?></p>
</body>
</html> 