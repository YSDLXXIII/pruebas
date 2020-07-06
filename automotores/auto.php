<?php
namespace automotores;

class Auto{
    public $modelo;
    public $puertas;
    public $llantas;

    function __construct($modelo,$puertas,$llantas){
        $this->modelo = $modelo;
        $this->puertas = $puertas;
        $this->llantas = $llantas;
    }

    function getAuto(){
        return "El modelo es " . $this->modelo . "  es " . $this->puertas . " puertas" . " y tiene " . $this->llantas  . " llantas." . "<br>"; 
    }
}

?>