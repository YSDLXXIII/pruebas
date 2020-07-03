<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>php_y_laravel</title>
</head>

<body>

    <!-- Barra de navegacion -->
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Horus</a>
    </nav>

    <!-- boton fluido -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Consola de php & laravel</h1>
            <p class="lead"> Esto es tu consola de inicio...</p>
        </div>
    </div>

    <div class="container">


        <div class="row">
            <div class="col-6">
                <div class="p-3 mb-2 bg-info text-white">
                    <h5>Calculadora</h5>

                    <form class="form-inline" method="POST" action="#">
                        <div class="form-group mx-sm-3 mb-2" >
                            <select name="opciones">
                                <option value="0">Sumar</option>
                                <option value="1">Restar</option>
                                <option value="2">Multiplicar</option>
                                <option value="3">Dividir</option>
                            </select> 

                            </div >
                        <div class="form-group mb-2">
                          
                            <input type="number" class="form-control" id="num1" name="num1" value="" placeholder="N°">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="number" class="form-control" id="num2" name="num2" value="" placeholder="N°">

                        </div>
                        <button type="submit" name="calcular" value="calcular" class="btn btn-primary mb-2">= </button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 mb-2 bg-dark text-white">
                    <h5>Respuesta</h5>
                    <?php

                
                include("clases.php");
                   if(isset($_REQUEST['calcular'])){
                       $n1 = $_REQUEST['num1'];
                       $n2 = $_REQUEST['num2'];
                       $op = $_REQUEST['opciones'];

                       switch($op){
                           case 0:
                            echo "" . cAlculadora ::sumar($n1,$n2);
                           break;

                           case 1:
                            echo "" . cAlculadora ::restar($n1,$n2);
                           break;

                           case 2:
                            echo "" . cAlculadora ::multiplicar($n1,$n2);
                           break;

                           case 3:
                            echo "" . cAlculadora ::dividir($n1,$n2);
                           break;
                       }
                   }

                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-3 mb-2 bg-dark text-white">
                    <h5>Formulario</h5>

                    <form class="form-inline" method="POST" action="#">
                        <div class="form-group mb-2">
                            <label for="staticEmail2" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="saludo" name="saludo" value="" placeholder="Correo">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">

                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Énviar</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 mb-2 bg-info text-white">
                    <h5>Respuesta</h5>
                    <?php
                    // if (isset($_POST["saludo"])) {
                    //     echo $_POST["saludo"];
                    // } else {
                    //     echo "Por que no saludas???";
                    // }
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-secondary text-white">
                    <h5>Clase: Metodos estaticos</h5>
                    <?php
                    class Calculo
                    {
                        public static function sumar($num1, $num2)
                        {
                            return $num1 + $num2;
                        }

                        public static function restar($num1, $num2)
                        {
                            return $num1 - $num2;
                        }

                        public static function multiplicar($num1, $num2)
                        {
                            return $num1 * $num2;
                        }

                        public static function dividir($num1, $num2)
                        {
                            return $num1 / $num2;
                        }
                    }

                    echo "El resultado de la suma es: " . Calculo::sumar(2, 5) . "<br>";
                    echo "El resultado de la resta es: " . Calculo::restar(2, 5) . "<br>";
                    echo "El resultado de la multiplicación es: " . Calculo::multiplicar(2, 5) . "<br>";
                    echo "El resultado de la divición es: " .  Calculo::dividir(2, 5) . "<br>";



                    // $calcu = new Calculadora();
                    // echo "El resultado de la suma es: " . $calcu->sumar(2,5) . "<br>";
                    // echo "El resultado de la resta es: " . $calcu->restar(2,5) . "<br>";
                    // echo "El resultado de la multiplicación es: " . $calcu->multiplicar(2,5) . "<br>";
                    // echo "El resultado de la divición es: " . $calcu->dividir(2,5) . "<br>";
                    ?>


                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">

                <div class="p-3 mb-2 bg-info text-white">
                    <h5>Clases: HERENCIA</h5>

                    <?php

                    class Lapiz
                    {
                        public $marca;
                        public $culer;
                        public $material;
                        public $borrador;
                        public $mina;

                        function __construct($marca, $culer, $material, $borrador, $mina)
                        {
                            $this->marca = $marca;
                            $this->culer = $culer;
                            $this->material = $material;
                            $this->borrador = $borrador;
                            $this->mina = $mina;
                        }

                        public function ver()
                        {
                            return "santiago esta trabajando com migo!!!";
                        }
                    }

                    class Escolar extends Lapiz
                    {
                    }
                    $marcador = new Escolar("papermate", 'Azul', 'Madera', 'goma', 'mina gris');
                    echo $marcador->ver();

                    ?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-dark text-white">
                    <h5>Clase: POO</h5>
                    <?php
                    class Perro
                    {
                        public  $nombre;
                        public $raza;
                        public $color;
                        public $edad;

                        function __construct($nombre, $raza, $color, $edad)
                        {

                            $this->nombre = $nombre;
                            $this->raza = $raza;
                            $this->color = $color;
                            $this->edad = $edad;
                        }
                        public function imprimirNom()
                        {
                            echo "El perro se llama " . $this->nombre . "<br>";
                            return $this;
                        }

                        public function imprimirRaza()
                        {
                            echo " y su raza es " . $this->raza . "<br>";
                            return $this;
                        }

                        public function imprimirColor()
                        {
                            echo " con un color  " . $this->color . "<br>";
                            return $this;
                        }

                        public function imprimirEdad()
                        {
                            echo " y su edad es de " . $this->edad . " años" . "<br>";
                            return $this;
                        }
                    }
                    $trosky = new Perro('Camilo', 'Hozky', 'marron con blanco', '15');
                    $trosky->imprimirNom()->imprimirRaza()->imprimirColor()->imprimirEdad();
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-primary text-white">
                    <h5>Clases: Funciones</h5>
                    <?php
                    function calculadora($signo, $num1, $num2)
                    {
                        switch ($signo) {
                            case "+":
                                return $num1 + $num2;
                                break;
                            case "-":
                                return $num1 - $num2;
                                break;
                            case "*":
                                return $num1 * $num2;
                                break;
                            case "/":
                                return $num1 / $num2;
                                break;
                            default:
                                return 0;
                        }
                    }
                    $resultado = calculadora("*", 5, 8);
                    echo "El resultado es: " . $resultado;

                    ?>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-success text-white">
                    <h5>Clases: Continue</h5>
                    <?php
                    $nombres = array("Roxane", "Anderson", "Jenny", "Santiago");

                    foreach ($nombres as $nombre) {

                        if ($nombre == "Anderson") {
                            continue;
                        }

                        echo $nombre . "<br>";
                    }

                    ?>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-info text-white">
                    <h5>Clases: Break</h5>
                    <?php
                    $nombres = array("Roxane", "Anderson", "Jenny", "Santiago");

                    foreach ($nombres as $nom) {
                        if ($nom == "Anderson") {
                            break;
                        }

                        echo $nom . "<br>";
                    }

                    ?>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-dark text-white">
                    <h5>Clases: Foreach</h5>
                    <?php
                    $nombres = array("Roxane", "Anderson", "Jenny");

                    foreach ($nombres as $nombre) {

                        echo $nombre . "<br>";
                    }

                    ?>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-danger text-white">
                    <h5>Clases: Arrays</h5>
                    <?php
                    $nombres = array("Duvan", "Julian", "Juan");
                    for ($i = 0; $i < count($nombres); $i++) {
                        echo $nombres[$i] . "<br>";
                    }
                    ?>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-primary text-white">
                    <h5>Clases: Arrays</h5>
                    <?php
                    $numero = array(1, 4, 6, 7);
                    for ($i = 0; $i < count($numero); $i++) {
                        echo $numero[$i] . "<br>";
                    }
                    ?>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-success text-white">
                    <h5>Clases: Bucle FOR</h5>
                    <?php
                    for ($i = 0; $i <= 5; $i++) {
                        echo "El nuemro es: " . $i . "<br>";
                    }
                    ?>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-info text-white">
                    <h5>Clases: Bucle WHILE</h5>
                    <?php
                    $numero = 0;

                    while ($numero <= 5) {
                        echo " El numero es " . $numero . "<br>";
                        $numero++;
                    }
                    ?>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-dark text-white">
                    <h5>Clases: Condicional SWITCH</h5>
                    <?php
                    $calificacion = 0;

                    switch ($calificacion) {
                        case 0:
                            echo "La calificacion es deficiente";

                            break;
                        case 1:
                        case 5:
                            echo "La calificacion es bajo";

                            break;
                        case 6:
                        case 7:
                            echo "La calificacion es basico";

                            break;
                        case 8:
                        case 9:
                            echo "La calificacion es buena";

                            break;
                        case 10:
                            echo "La calificacion es alta";

                            break;
                        default:
                            echo "La calificacion no es valida.";
                    }



                    // if($calificacion == 0){
                    //     echo "La calificacion es deficiente";
                    // } else if($calificacion == 1 || $calificacion == 5){
                    //     echo "La calificacion es bajo";
                    // } else if($calificacion == 6 || $calificacion == 7){
                    //     echo "La calificacion es basico";
                    // } else if($calificacion == 8 || $calificacion == 9){
                    //     echo "La calificacion es buena";
                    // } else if($calificacion == 10){
                    //     echo "La calificacion es alta";
                    // } else{
                    //     echo "La calificacion no es valida.";
                    // }
                    ?>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-danger text-white">
                    <h5>Clases: Condicional IF</h5>
                    <?php
                    $nombre = "Duván";
                    $años = 1995;

                    if ($años > 1950 && $años < 2020) {
                        echo "esta vivo en esta epoca <br>";
                    }

                    if ($nombre == "Duván" && $años == 1995) {
                        echo "Eres el indicado";
                    } else if ($nombre == "Duvan" && $años > 2020) {
                        echo "Podria ser el indicado";
                    } else {
                        echo "No eres el indicado";
                    }
                    ?>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-info text-white">
                    <h5>Clases: Operadores</h5>
                    <?php
                    $numero1 = 1;
                    $numero2 = 10;
                    //  $resultado = $numero1 + $numero2;

                    echo "El resultado de la suma es : " . ($numero1 + $numero2) . "<br>";
                    echo "El resultado de la resta es : " . ($numero1 - $numero2) . "<br>";
                    echo "El resultado de la multiplicacion es : " . ($numero1 * $numero2) . "<br>";
                    echo "El resultado de la divicion es : " . ($numero1 / $numero2) . "<br>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 mb-2 bg-dark text-white">
                    <h5>Clases: variables de tipo de datos</h5>
                    <?php

                    $nombre = " Duván";
                    $viejo = true;
                    $años = 1995;
                    $km = 10.45;

                    echo "Hola " . $nombre . ", nacites en el año " . $años . " y estas a " . $km . " kilometros  de distancia. <br>";
                    echo "La variable nombre es de tipo " . gettype($nombre);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>