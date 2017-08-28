<?php 
class Message{
    function createMessage($message){
        $_SESSION["message"]["type"] = $message["type"];
        $_SESSION["message"]["text"] = $message["text"];
    
    }
    
    function showMessage(){
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"]["text"];
        }
    }
}


?>