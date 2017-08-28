<?php 
    if(!isset($_COOKIE["login"])){
        header ("location: login-form.php");
        return;
    }
    $loginvars=explode(",",$_COOKIE["login"]);
    $email=$loginvars[0];
    $hashedMail=$loginvars[1];
    try{
        $db = new pdo('mysql:host=localhost;dbname=opdracht-security-login', 'arteau', 'arteau');
    }
    catch(Exception $e){
        $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
    }
    $salt = $db->query("SELECT salt FROM users u WHERE u.email='$email'")->fetch(PDO::FETCH_OBJ)->salt;

    if(hash("sha512",$email.$salt)==$hashedMail)
    {

    }else{
        
        header("location: logout.php");
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
    <title> </title>
</head>
<body>
    <h1>Dashboard</h1>
    Welkom <?= $email ?> 
    <a href="logout.php">uitloggen</a>
</body>
</html>