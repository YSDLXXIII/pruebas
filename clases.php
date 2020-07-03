<?php

class CAlculadora{
    public static function sumar($num1,$num2){
        $suma = $num1 + $num2;
        return $suma;
    }
    public static function restar($num1,$num2){
        $resta = $num1 - $num2;
        return $resta;
    }


    public static function multiplicar($num1,$num2){
        $multiplicar = $num1 * $num2;
        return $multiplicar;
    }

    public static function dividir($num1,$num2){
        $dividir = $num1 / $num2;
        return $dividir;
    }
}


?>