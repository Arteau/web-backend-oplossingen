<?php
    
    $jaartal = 2013;

//    if($jaartal %4 == 0)
//    {
//        //schrikkeljaar
//        $jaartalMessage = "het jaartal ".$jaartal." is een schrikkeljaar";
//    }
//    else
//    {
//        $jaartalMessage = "het jaartal ".$jaartal." is GEEN schrikkeljaar";
//    }
//    
    if($jaartal %100 == 0)
    {
        if($jaartal %400 == 0)
           {
               //schrikkeljaar
                $jaartalMessage = "het jaartal ".$jaartal." is een schrikkeljaar";

           }
        else
        {
            //geen schrikkeljaar
            $jaartalMessage = "het jaartal ".$jaartal." is GEEN schrikkeljaar";

        }
    }
    else if($jaartal %4 == 0)
    {
        //schrikkeljaar
        $jaartalMessage = "het jaartal ".$jaartal." is een schrikkeljaar";

    } 
    else
    {
        $jaartalMessage = "het jaartal ".$jaartal." is GEEN schrikkeljaar";
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>If Else</title>
</head>
<body>
    <p><?php echo $jaartalMessage; ?></p>
</body>
</html>