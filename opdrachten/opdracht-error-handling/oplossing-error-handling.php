<?php 

spl_autoload_register(function ($name) {
    include $name.'.php';
});
session_start();
$Message = new Message();
if(isset($_SESSION["message"]))
{
    unset($_SESSION["message"]);
}

$isValid=false;

try{
    if(isset($_POST["submit"]))
    {
        if(!isset($_POST["code"])){
            throw new Exception ('SUBMIT-ERROR');
        }
        else{
            $code=$_POST["code"];
            if(strlen($code)==8){
                $isValid=true;
            }
            else{
                throw new ImprovedException(['VALIDATION-CODE-LENGTH',$code]);
            }
       
        }
    }
}
catch(Exception $e)
{
    $messageCode = $e->getMessage();
    $message = [];
    $createMessage = false;    

    switch ($messageCode) {
        case "SUBMIT-ERROR" :
            $message["type"] = "ERROR";
            $message["text"] = "Er werd met het formulier geknoeid.";            
        break;
        case "VALIDATION-CODE-LENGTH" :
            $message["type"] = "ERROR";
            $message["text"] = "De kortingscode heeft niet de juiste lengte.";
            $message["code"] =$e->getKortingsCode();
            $createMessage = true;
        break;
        default :
            $message["type"] = "Unknown";
            $message["text"] = "Er ging iets mis.";
        break;
    };
    

    if($createMessage){
        $Message->createMessage($message);//$_SESSION["message"]);
    }    

    logToFile($message);
}






function logToFile($input){
    $timeDate = date("H:i:s d/m/Y");
    $ipAddress = $_SERVER["REMOTE_ADDR"];
    $errorType = $input["type"];
    $errorMessage = $input["text"];
    $code ="";
    if(isset($input["code"])){
        $code=$input["code"];
    }
    $file=fopen('log.txt','a');
    fwrite($file, "[".$timeDate."] - ".$ipAddress." - type: [".$errorType."] ".$errorMessage."\t".$code."\n\r");
    fclose($file);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>error handling</title>
</head>
<body>
    <h1>Geef uw kortingscode op</h1>

        <?= $Message->showMessage(); ?>

    <?php if(!$isValid) : ?>
        <form method="post" action="oplossing-error-handling.php">
            <label for="code">Kortingscode</label>
            <input type="text" name="code"></input>
            <p><button type="submit" name="submit">Verzenden</button></p>
        </form>
    <?php else : ?>
        <p>Kortingscode toegekend.</p>
    <?php endif; ?>
</body>
</html>