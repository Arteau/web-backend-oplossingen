<?php 
    $users = json_decode(file_get_contents("users.txt"))->users;
    // echo "<pre>".var_dump($users)."</pre>";
    $errormsg="";
    $validated = false;
    // setcookie("tesdst","",time() + 3600);
    
    if(isset($_GET["logout"]) && ($_GET["logout"]=="true"))
    {     
        if(isset($_COOKIE["userCookie"]))
        {
            setcookie('userCookie','',1);
            setcookie('userCookie',false);
            unset($_COOKIE["userCookie"]);
            $errormsg = "Succesvol uitgelogd.";
        }
    }

    

    if(isset($_POST["paswoord"]) && isset($_POST["gebruikersnaam"]))
    {

        foreach($users as $user)
        {
            if($user->naam == $_POST["gebruikersnaam"] && $user->paswoord == $_POST["paswoord"])
            {
                $validated=true;
                $currentUsername = $user->naam;

                if(isset($_POST["onthouden"]))
                {
                    setcookie("userCookie", json_encode($user), time() + 30*24*3600);
                    //als je cookies set met een lege sting als value gebeuren er vreemde dingen. Niet veel over teruggevonden nochtans
                }
                else
                {
                    setcookie("userCookie", json_encode($user));                
                }
            }
            else{
                $errormsg = "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.";
            }
        }
    }
        // if($_POST["paswoord"] == $users[0]->paswoord && $_POST["gebruikersnaam"] == $users[0]->naam)
        // {
        //     // echo "in cookie set if";
        //     // echo $validated;
            
        // $validated=true;
        //     if(isset($_POST["onthouden"]))
        //     {
        //         setcookie("test","ll",time() + 30*24*3600);
                
        //     }
        //     else
        //     {
        //         setcookie("test","ll");                
        //     }
            
        // }else{
        //     $errormsg = "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.";
        // }
    //Hier moet nog gechecked worden of de cookie niet gespoofed is
    if(isset($_COOKIE["userCookie"])){
        $validated=true;
        $currentUsername = json_decode($_COOKIE["userCookie"])->naam;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>oplossing cookies</title>
</head>
<body>
    <?php if(!$validated) : ?>
    <form action="oplossing-cookies.php" method="post">
        <h1>Inloggen</h1>
        <?php if(isset($errormsg)) : echo "<div class='modal error'>".$errormsg."</div>"; ?><?php endif; ?>
        <label for="gebruikersnaam">gebruikersnaam</label>
        <input type="text" name="gebruikersnaam"></input>
        <br>
        <label for="paswoord">paswoord</label>
        <input type="password" name="paswoord"></input>
        <br>
        <input type="checkbox" name="onthouden"></input>
        <label for="onthouden">onthoud mij</label>
        <br>
        <button type="submit">verzenden</button>
    </form>    
    <?php endif ?>
    <?php if($validated) : ?>
        <h1>Dashboard</h1>
        <p>Hallo <?php echo $currentUsername; ?>, fijn dat je er weer bent.</p>
        <p><a href="oplossing-cookies.php?logout=true">Uitloggen</a></p>
    <?php endif ?> 

</body>
</html>