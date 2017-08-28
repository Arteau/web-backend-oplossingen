<?php
session_start();
    $_SESSION['notification']="U bent uitgelogd. Tot de volgende keer !";
    setcookie('login',null,time()-4000);
    unset($_COOKIE['login']);
    header("location: login-form.php");


?>