<?php 
$message ="";
try{
    $db = new pdo('mysql:host=localhost;dbname=bieren', 'arteau', 'arteau');
}
catch(Exception $e){
    $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
}

$result = $db->query("SELECT brouwernr, brnaam FROM brouwers");
$searchResult = $result->fetch(PDO::FETCH_OBJ);
// var_dump($searchResult);
$resultArray = array();
while($searchResult = $result->fetch(PDO::FETCH_OBJ)){
    $resultArray[$searchResult->brnaam]=$searchResult->brouwernr;
}
$bieren=array();
$flag=false;
$selected=0;
if(isset($_POST['brouwerijNr']))
{
    $flag=true;
    $selected=$_POST['brouwerijNr'];
    $selectBieren = $db->query("SELECT * FROM bieren WHERE brouwernr = ".$_POST['brouwerijNr']);
    $count=1;
    while($searchResult = $selectBieren->fetch(PDO::FETCH_OBJ)){
        $bieren[$count++]=$searchResult->naam;
        
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
    <title>CRUD Query deel 1</title>
</head>
<body>
    <style>
        .odd{
            background-color: grey;
            color: white;
        }
    </style>
    <form action="oplossing-crud-query.deel2.php" method="post">
    <select name="brouwerijNr" >>
        <?php 
            foreach($resultArray as $brouwerij=>$nr)
            {
                if($selected==$nr){

                    echo "<option selected value='".$nr."'>".$brouwerij."</option>";
                }else{

                    echo "<option value='".$nr."'>".$brouwerij."</option>";
                }
            }
        
        ?>

    </select>
        <button type="submit">Geef mij alle bieren !</button>
    </form>
        <?php if($flag):?>
        <table>
            <thead>
                <th>#</th>
                <th>naam</th>
            </thead>
            <tbody>
            <?php 
            foreach($bieren as $nr =>$bier)
            {
                if($nr%2==1){
                    echo "<tr class='odd'>";

                }else{
                    echo"<tr>";
                }
                echo "<td>".$nr."</td>";
                echo "<td>".$bier."</td>";
                echo "</tr>";
            }
            
            ?>
            </tbody>
            <tfoot></tfoot>
        </table>
        <?php endif;?>
</body>
</html>