<?php   

    $rijen = 10;
    $kolommen = 10;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Looping For: Deel 1</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
   <table>
        <?php for($i=0; $i<$rijen; $i++) : ?>
           <tr>
               <?php for($o=0; $o<$kolommen; $o++) : ?>
                   <td>Kolom</td>
               <?php endfor ?>
           </tr>
        <?php endfor ?>
    </table>    
</body>
</html>