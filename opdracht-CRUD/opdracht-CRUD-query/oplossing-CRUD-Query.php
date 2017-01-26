<?php
    $foutMelding = "";
    $selectQuery = "SELECT * FROM bieren bi INNER JOIN brouwers br WHERE bi.naam LIKE 'du%' AND br.brnaam LIKE '%a%'";

    try
    {
        $db = new pdo("mysql:host=localhost;dbname=bieren","root","root");
        
        $foutMelding = "Connectie met de database is geslaagd.";
    }
    catch ( pdoException $e)
    {
        $foutMelding = "Connectie met de database is mislukt.";
    }
    
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing CRUD Query</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
    <body>
        <p>
            <?= $foutMelding ?>
        </p>
    </body>
</html>