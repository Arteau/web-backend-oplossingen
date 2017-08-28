<?php
    
    $rijen = 11;
    $kolommen = 11;
    
    for($multiplication=0; $multiplication<11; $multiplication++)
    {
        $multiplicationArray[$multiplication] = array();
        
        for($value=0; $value<11; $value++)
        {
            $multiplicationArray[$multiplication][$value] = $value*$multiplication;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Looping For: Deel 2</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
      <table>
        <?php for($i=0; $i<$rijen; $i++) : ?>
           <tr>
               <?php for($o=0; $o<$kolommen; $o++) : ?>
                                    
                       <td>
                           <?php echo $multiplicationArray[$i][$o] ?>
                       </td>
                                      
               <?php endfor ?>
           </tr>
        <?php endfor ?>
    </table>    
</body>
</html>