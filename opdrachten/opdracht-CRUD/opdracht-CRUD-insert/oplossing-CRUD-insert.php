<?php 
try{
    $db = new pdo('mysql:host=localhost;dbname=bieren', 'arteau', 'arteau');
}
catch(Exception $e){
    $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
}
$input=array();
$message="";
if(isset($_POST["brnaam"])){
    $brnaam=$_POST["brnaam"];
    $adres=$_POST["adres"];
    $postcode=$_POST["postcode"];
    $gemeente=$_POST["gemeente"];
    $omzet=$_POST["omzet"];
    //TODO: clean input
    // echo "INSERT INTO brouwers (brnaam,adres,postcode,gemeente,omzet)
    //  VALUES ("."'".$brnaam."','".$adres."',".$postcode.",'".$gemeente."',".$omzet."".") ";
    $t= $db->prepare("INSERT INTO brouwers (brnaam,adres,postcode,gemeente,omzet) VALUES ("."'".$brnaam."','".$adres."',".$postcode.",'".$gemeente."',".$omzet."".") ")->execute();
    // echo "asdf".$t;//var_dump($t); 
   if($t)
   {
    $message="Brouwerij Succesvol toegevoegd! Met ID.".$db->lastInsertId();
   }
   else{
       $message="Brouwerij kon niet toegevoegd worden. Er ging iets mis. ";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>CRUD Insert</title>
</head>
<body>
    <h1>Voeg een brouwer toe</h1>
    <?=$message?>
    <form action="oplossing-CRUD-insert.php" method="post">
        <label for="brnaam">Brouwernaam</label>
        <input type="text" name="brnaam"></input>
        <label for="adres">Adres</label>
        <input type="text" name="adres"></input>
        <label for="postcode">Postcode</label>
        <input type="text" name="postcode"></input>
        <label for="gemeente">Gemeente</label>
        <input type="text" name="gemeente"></input>
        <label for="omzet">Omzet</label>
        <input type="text" name="omzet"></input></br>
        <button type="submit" name="submit">Verzenden</button>
    </form>
</body>
</html>