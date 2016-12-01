
<?php
    $boodschappenlijstje = array("brood", "kaas", "boter", "wc papier", "bier", "tandpasta");
    $boodschappenlijstLengte = count($boodschappenlijstje);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>while 2</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
    <ul>
        <?php 
            $i = 0;
            while($i < $boodschappenlijstLengte)
            {
                echo "<li>".$boodschappenlijstje[$i]."</li>";
                $i++;
            }
        
        ?>
    </ul> 
</body>
</html>