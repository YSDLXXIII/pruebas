<?php
namespace automaticacion;

class Auto{
    public $description;
    public $intents;
    public $data;

    function __construct($description,$intents,$data){
        $this->description = $description;
        $this->intents = $intents;
        $this->data = $data;
    }

    function getAuto(){
        return "Es un software " . $this->description . "que se utiliza a " . $this->intents . " y utiliza el gestor de base de datos " . $this->data;
    }
}


?>