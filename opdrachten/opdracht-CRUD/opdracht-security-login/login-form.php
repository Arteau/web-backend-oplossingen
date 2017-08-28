<?php 
session_start();
if(isset($_COOKIE['login'])){
    header('location: dashboard.php');
    return;
}
?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title> </title>
</head>
<body>
    <form action="login-process.php" method="post">
        <p class="alert"><?= isset($_SESSION["notification"])?$_SESSION["notification"]:""; ?></p>
        <p><label for="email">email</label></p>
        <p><input name="email" value="<?=isset($_SESSION["email"])?$_SESSION["email"]:""?>"></input></p>
        <p><label for="paswoord">paswoord</label></p>
        <p><input name="paswoord"type="password" ></input>
        <p><button type="submit" name="login" value="a">inloggen</button></p>
        <?=isset($_SESSION["message"])?$_SESSION["message"]:""?>
        <p>Nog geen account? Maak er dan eentje aan op de <a href="registratie-form.php">registratiepagina</a></p>
    
    </form>
</body>
</html>