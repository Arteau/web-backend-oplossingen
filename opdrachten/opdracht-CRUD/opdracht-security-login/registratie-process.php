<?php 
    session_start();
    $location = "registratie-form.php";

    if(isset($_POST["paswoordSubmit"])){
        $_SESSION["var"] = genPas(8);
        $_SESSION["email"] = $_POST["email"];
        header("location: ". $location);
    }
    if(isset($_POST["registreerSubmit"])){
        //aanmaken db connection
        try{
            $db = new pdo('mysql:host=localhost;dbname=opdracht-security-login', 'arteau', 'arteau');
        }
        catch(Exception $e){
            $message = "Er ging iets mis: [  ".$e->getMessage()."  ]";
        }

        

        $emailValidateMessage = "";
        $emailCheck = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        if(!$emailCheck)
        {
            $emailValidateMessage = "Email adres is niet correct.";
        }else
        {
            $mailQuery = $db->query("SELECT COUNT(*) AS 'total' FROM users WHERE email = '$emailCheck'");
            $count=$mailQuery->fetch(PDO::FETCH_OBJ)->total;
            if($count== 0){
                $salt=uniqid(mt_rand(), true);
                $hashedPass=hash("sha512",$_POST['paswoord'].$salt);
                // $time =date('Y-m-d H:i:s');
                $mailUpdateQuery = $db->prepare("INSERT INTO users (email, salt, hashed_password, last_login_time) VALUES ('$emailCheck', '$salt', '$hashedPass', NOW())")->execute();
                // echo $emailCheck;
                $hashedMail="".hash("sha512",$emailCheck.$salt);
                $emailValidateMessage=$emailCheck.",".$hashedMail;
                setcookie('login',$emailCheck.",".$hashedMail,time()+30*24*3600);
                
                // $hashedMail=hash("sha512",$email.$salt);    
                // setcookie('login',$email.",".$hashedMail,time()+30*24*3600);
                header("location: dashboard.php");//maak dynamish?
                return;
                if($mailUpdateQuery){
                }
            }else{
                $emailValidateMessage=$emailCheck." is al een gebruiker, gelieve een ander e-mail adres in te vullen.";
            }
        }
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["notification"] = $emailValidateMessage;
        header("location: ". $location);
    }
    
    header('location: login-form.php');
   
    function generatePasswoord($length ,$lower, $upper, $number, $special)
    {
        $randSeed = [];//als een argument true is wordt die bijhorende array toegevoegd aan de verzameling tekens waaruit gekozen wordt.
        $randSeed=array_merge($randSeed, $lower?['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']:[]);
        $randSeed=array_merge($randSeed, $upper?['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']:[]);
        $randSeed=array_merge($randSeed, $number?['1','2','3','4','5','6','7','8','9','0']:[]);
        $randSeed=array_merge($randSeed, $special?['.','/','!',':','|','(',')','?']:[]);
        $password = "";
        $_SESSION["randseed"]=$randSeed;

        for($i=0; $i<$length; $i++ ){
            $paswoord.= $randSeed[random_int(0, sizeof($randSeed)-1)];//TODO cgeck

        }
        return $paswoord;
    }

    function genPas($length){
        return generatePasswoord($length, true, true, true, true);
    }



?>