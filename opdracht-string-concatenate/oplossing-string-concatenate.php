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
</head>
<body>
   <p>De Volledige naam is <?php print $volledigeNaam; ?></p>
   <p>De volledige naam bestaat uit <?php print $volledigeNaamLengte; ?> tekens.</p>
</body>
</html>