<?php 

//Had eerst de opgave nogal oppervlakkig gelezen voor ik begon aan deze oefening. Heb pas na het namaken van het voorbeel de opgave nog eens doornomen.
//Er zijn dus een paar verschillen tussen hoe ik bepaalde dingen heb opgelost vs hoe de opgave zei dat het moest, maar het eindresultaat werkt naar behoren.
//Voorbeelden waar ik ben afgeweken:
//sortOn als get variabele naam ipv order_by
//extra get variabele ipv sortOn te exploden
//niet de class van het th element aangepast maar dynamisch een image tag erin geplaatst voor het icoon
//enkel bij het geselecteerde element een icoon geplaatst
    $sortOnFlag = false;

    if(isset($_GET["sortOn"]))
    {
        $sortOnFlag = true;
        $sortOn = $_GET["sortOn"];
        $ASC=$_GET["ASC"]=="true";
     
    }

    try{
        $db = new pdo('mysql:host=localhost;dbname=bieren', 'arteau', 'arteau');
    }
    catch(Exception $e){
        $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
    }

    //Query = SELECT * FROM bieren INNER JOIN brouwers, soorten
    $queryVar = "SELECT 
    br.brouwernr,
    b.naam,
    b.biernr,
    b.alcohol,
    s.soortnr,
    s.soort,
    br.brnaam,
    br.adres,
    br.postcode,
    br.gemeente,
    br.omzet
    FROM ((bieren b INNER JOIN soorten s ON b.soortnr=s.soortnr) INNER JOIN brouwers br ON br.brouwernr=b.brouwernr)
    ";
        $queryVar.=$sortOnFlag?"ORDER BY ".$sortOn.($ASC?' ASC':' DESC'):'';
        // if($ASC)
        // {
        //     $queryVar.=' ASC';
        // }else{
        //     $queryVar.=' DESC';
            
        // }
    
    echo $queryVar;
    $selection = $db->query($queryVar);
    $selectionArray = [];
    
    while($selected = $selection->fetch(PDO::FETCH_ASSOC))
    {
        array_push($selectionArray, $selected);

    }
   $keys=array_keys($selectionArray[0]);
//    var_dump($keys);
    function ascdesc()
    {
        return isset($_GET["ASC"])?($_GET["ASC"]=="true"?0:1):0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>CRUD Order By</title>
</head>
<body>
    <table>
        <thead>
            <?php 
                foreach($keys as $key)
                {
                    $img =["icon-asc.png","icon-desc.png"];
                    echo "<th>".(($sortOn==$key)?"<img src=".$img[ascdesc()]."></img>":"");
                    echo "<a href='?";
                    echo isset($_GET['ASC'])?($_GET['ASC']=='true'?"ASC=false":"ASC=true"):"ASC=true";
                    echo "&sortOn=".$key."'>".$key."</a></th>";
                    //  if(isset($_GET['ASC'])){
                    //         if($_GET['ASC']=='true'){
                    //             echo "ASC=false";
                    //         }else{
                    //             echo "ASC=true";
                    //         }
                    //     }else{
                    //         echo "ASC=true";
                    //     }
                    
                }
            ?>
        </thead>
        <tbody>
                <?php
                    foreach($selectionArray as $selection)
                    {
                        echo "<tr>";
                        foreach($keys as $key)
                        {
                            
                            echo "<td>".$selection[$key]."</td>";
                        }
                        echo "</tr>";
                    }
                
                ?>
        </tbody>
        <tfoot>
        </tfoot>
    
    </table>

    
</body>
</html>