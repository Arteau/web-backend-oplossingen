<?php 

session_start(); 
if(isset($_COOKIE['login'])){
    header('location: dashboard.php');
    return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    
    <title>Security Login: Registratie form</title>
</head>
<body>
    <style>
    .alert{
        color: red;
        background-color: lightgrey;
    }
    </style>
    <h1>Registreren</h1>
    <form action="registratie-process.php" method="post">
        <p class="alert"><?= isset($_SESSION["notification"])?$_SESSION["notification"]:""; ?></p>
        <p><label for="email">email</label></p>
        <p><input name="email" value="<?=isset($_SESSION["email"])?$_SESSION["email"]:""?>"></input></p>
        <p><label for="paswoord">paswoord</label></p>
        <p><input name="paswoord" value="<?=isset($_SESSION["var"])?$_SESSION["var"]:""?>" ></input><button type="submit" name="paswoordSubmit">Genereer paswoord</button></p>
        <p><button type="submit" name="registreerSubmit">Registreer</button></p>
        <?=isset($_SESSION["message"])?$_SESSION["message"]:""?>
        
    
    </form>
</body>
</html>