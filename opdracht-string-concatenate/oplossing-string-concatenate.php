<?php
    $voornaam = "Arteau";
    $achternaam = "De Meester";
    $volledigeNaam = $voornaam." ".$achternaam;
    $volledigeNaamLengte = strlen($volledigeNaam);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing String Concatenate</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
   <p>De Volledige naam is <?php print $volledigeNaam; ?></p>
   <p>De volledige naam bestaat uit 
   <?=  $volledigeNaamLengte ?> tekens.</p>
</body>
</html>