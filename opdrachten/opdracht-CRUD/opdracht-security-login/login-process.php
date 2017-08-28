<?php 
session_start();
   
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['paswoord'];
    }else{
        
        header('location: login-form.php');
        return;
    }
     try{
        $db = new pdo('mysql:host=localhost;dbname=opdracht-security-login', 'arteau', 'arteau');
    }
    catch(Exception $e){
        $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
    }
    $firstuser = $db->query("SELECT * FROM users u WHERE u.email='$email'")->fetch(PDO::FETCH_OBJ);
    if(!$firstuser){
        $_SESSION["notification"]="Dit email adres is niet geregistreerd";
        header("location: login-form.php");
        return;
    }
    $firstuser->salt;
    $hashedPass=hash("sha512",$pass.$firstuser->salt);
    if($hashedPass==$firstuser->hashed_password){
        //yeey logged in

    }else{
        $_SESSION["notification"]="Verkeerde wachtwoord, probeer opnieuw";
        header("location: login-form.php");
        return;
    }
    $hashedMail=hash("sha512",$email.$firstuser->salt);    
    setcookie('login',$email.",".$hashedMail,time()+30*24*3600);
    header("location: dashboard.php");
?>