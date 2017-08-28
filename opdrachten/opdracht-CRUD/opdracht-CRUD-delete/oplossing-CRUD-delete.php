<?php 
    $message ="";

    try{
        $db = new pdo('mysql:host=localhost;dbname=bieren', 'arteau', 'arteau');
    }
    catch(Exception $e){
        $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
    }
    if(isset($_POST["delete"]))
    {
        $confirmFlag = true;
        $brouwerToDelete = $_POST["delete"];
    }
    else{
        $confirmFlag = false;
    }

    if(isset($_POST["confirm"]))
    {
        $deleteQuery = $db->prepare("DELETE FROM brouwers WHERE brouwernr = ".$_POST["confirm"]); 
        //Kan de entries die reeds in de brouwers tabel stonden niet deleten door een "Cannot delete or update a parent row: a foreign key constraint fails" error
        //De zelf toegevoegde entries kunnen wel verwijderd worden.
        if($deleteQuery->execute()){

            $message = "Brouwer met brouwernummer ".$_POST['confirm']." werd verwijderd";
        }
        else{
            //var_dump($deleteQuery->errorInfo());
            $message = "Entry kon niet worden verwijderd : ".$deleteQuery->errorInfo()[2];

            
        }   
    }



    $brouwers=[];
    $brouwersQuery = $db->query("SELECT * FROM brouwers");
    while($brouwer = $brouwersQuery->fetch(PDO::FETCH_OBJ))
        {
            array_push($brouwers,$brouwer);
        }


    //Query: SELECT * FROM brouwers
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>CRUD Delete</title>
</head>
<body>
    <style>
        .odd {
            background-color: lightgrey;
        }
        .alert{
            color:red;
        }
    </style>
        <form action="oplossing-CRUD-delete.php" method="post">

    <?php  if($confirmFlag) : ?>

        <label class="alert">Bent u zeker dat u deze datarij wil verwijderen?</label>
        <button type="submit" name="confirm" value=<?php echo $brouwerToDelete ?>>Ja!</button><button type="submit" name="deny">Nee!</button>
    <?php endif; ?>
        <?= $message ?>
    <table>
        <thead>
            <th>#</th>
            <th>brouwernr</th>
            <th>brnaam</th>
            <th>adres</th>
            <th>postcode</th>
            <th>gemeente</th>
            <th>omzet</th>
            <th>delete</th>
        </thead>
        <tbody>
            <?php
                $count = 0;
                foreach($brouwers as $brouwer)
                {
                    $count ++;
                    $class="";
                    if(isset($brouwerToDelete)&&$brouwer->brouwernr==$brouwerToDelete)
                    {
                       $class='alert ';
                    }
                    if($count%2==1)
                    {
                        $class.='odd ';//echo "<tr class='odd'>";
                    }
                    
                    echo "<tr class='$class'>";    
                    echo"<td>$count</td>
                        <td>$brouwer->brouwernr</td>
                        <td>$brouwer->brnaam</td>
                        <td>$brouwer->adres</td>
                        <td>$brouwer->postcode</td>
                        <td>$brouwer->gemeente</td>
                        <td>$brouwer->omzet</td>
                        <td><button name='delete' value=$brouwer->brouwernr type='submit'><img src='icon-delete.png'></img></button></td>
                        </div>
                        </tr>
                    ";
                }
            ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    </form>
</body>
</html>