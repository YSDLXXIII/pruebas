<?php

    class Persona{
        public $nombre;
        public $edad;

        function __construct($nombre,$edad)
        
        {
            $this->nombre = $nombre;
            $this->edad = $edad;   
        }

        function greetings(){
            return "Hola" . $this->nombre . "" . $this->edad;
        }
    }

?>