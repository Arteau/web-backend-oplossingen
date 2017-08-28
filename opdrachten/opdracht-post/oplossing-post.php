<?php

    $password = "123456789";
    $username = "arteau";
    $message = "";

    if(isset($_POST["gebruikersnaam"]) && isset($_POST["paswoord"]))
    {
        if($_POST["paswoord"] == $password && $_POST["gebruikersnaam"] == $username)
        {
            $message = "Welkom.";
        }
        else
        {
            $message = "Er ging iets mis bij het inloggen, probeer opnieuw";
        }
    }
    //    $_POST[]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing Opdracht Post</title>
</head>
<body>
    <form action="oplossing-post.php" method="post">
        <p><label for="gebruikersnaam">Gebruikersnaam</label></p>
        <p><input type="text" name="gebruikersnaam"></input></p>

        <p><label for="paswoord">Paswoord</label></p>
        <p><input type="password" name="paswoord"></input></p>
        <p><button type="submit">verzenden</button></p>

    </form>

    <?php echo $message; ?>
</body>
</html>