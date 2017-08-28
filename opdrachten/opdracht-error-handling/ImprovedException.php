<?php 
class ImprovedException extends Exception{
    protected $messages=array();
    public function  __construct(array $message){
        parent::__construct($message[0]);
        $this->messages=$message;
    }
    public function getKortingsCode(){
        return $this->messages[1];
    }

}

?>