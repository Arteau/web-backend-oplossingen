
<?php
    $fruit = "kokosnoot";
    $fruitLengte = strlen($fruit); 
    $posEersteO = strpos($fruit, "o");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing String Extra Functions: Deel 1</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <p>Het woord <?php print $fruit; ?> is <?php print $fruitLengte; ?> tekens lang.</p>
    <p>De eerste 'o' in het woord <?php print $fruit ?> staat op de <?php print $posEersteO;?>e plaats.</p>
</body>
</html>