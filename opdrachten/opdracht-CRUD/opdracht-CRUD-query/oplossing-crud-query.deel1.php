<?php 
$message ="";
try{
    $db = new pdo('mysql:host=localhost;dbname=bieren', 'arteau', 'arteau');
}
catch(Exception $e){
    $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
}

$result = $db->query("SELECT * FROM bieren JOIN brouwers WHERE naam LIKE 'du%' AND brnaam LIKE '%a%'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>CRUD Query deel 1</title>
</head>
<body>
    <style>
        .even{
            background-color: grey;
            color: white;
        }
    </style>
    <?= $message; ?>
    <table>
        <thead>
        <th>#</th>
        <th>biernr (PK)</th>
        <th>naam</th>
        <th>brouwernr</th>
        <th>soortnr</th>
        <th>alcohol</th>
        <th>brnaam</th>
        <th>adres</th>
        <th>postcode</th>
        <th>gemeente</th>
        <th>omzet</th>
    </thead>
    <tbody>
    <?php
    $count = 0;
    while($searchResult = $result->fetch(PDO::FETCH_OBJ)){
        $count ++;

        if($count%2==1)
        {   
            echo "<tr>";


        }
        else{
            echo "<tr class='even'>";

        }
        echo "<td>".$count."</td>";
        echo "<td>".$searchResult->biernr."</td>";            
        echo "<td>".$searchResult->naam."</td>";            
        echo "<td>".$searchResult->brouwernr."</td>";
        echo "<td>".$searchResult->soortnr."</td>";
        echo "<td>".$searchResult->alcohol."</td>";
        echo "<td>".$searchResult->brnaam."</td>";
        echo "<td>".$searchResult->adres."</td>";
        echo "<td>".$searchResult->postcode."</td>";
        echo "<td>".$searchResult->gemeente."</td>";
        echo "<td>".$searchResult->omzet."</td>";
        echo "</tr>";

    }
    ?>
    </tbody>
    </table>
</body>
</html>