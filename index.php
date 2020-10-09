<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">La Maizena</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="form.html">Form </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Bienvenido a mi portafolio</h1>
            <p class="lead">Ingeniero en Sistemas Computacionales.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-light text-dark">
                    <h3>Formularios</h3>
                    <form class="form-inline" method="POST" action="#">
                        
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputText" class="sr-only">Texto</label>
                            <input type="text" class="form-control" id="inputText" name="inputText" placeholder="Di algo">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-info text-white">

                    <h3>Formularios</h3>
                    <?php
                    if(isset($_POST['inputText'])){ 
                    echo $_POST['inputText'];
                    } else {
                    echo "Esperando saludo";
                    }
                    ?>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                    <h1>Calculadora</h1>

                    <?php
                class Calculadora {
                public static function sumar($num1,$num2){
                    return $num1+$num2;
                }
                public static function restar($num1,$num2){
                    return $num1-$num2;
                }

            }

                $calc = new Calculadora();
                echo " El Resultado de la suma es: " . calculadora::sumar(1,1) . "<br>";
                echo " El Resultado de la resta es: " . calculadora::restar(1,1) . "<br>";
                ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h1>Break</h1>
                    <?php
                 
                 $names = array("Rocky","Max","Arturo","Mariana", "Hector");
                 
                 foreach($names as $name){
                    if($name == "Arturo"){
                    break;
                    }
                    echo $name . "<br>";
                 }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Funciones</h3>
                    <?php

                    function calc($sign,$num,$num2){

                        switch($sign){
                            case"+":
                                return $num + $num2;
                            break;

                            case"-":
                                return $num - $num2;
                            break;
                            
                            default:
                            return 0;

                        }
                    }

                    $result = calc("-",3,3);

                    echo "el resultado es: " . $result;
                        
                            ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="p-3 m-2 bg-danger text-white text-justify">
                    <h3>POO</h3>

                    <?php
                        class Mascota {
                            public $patas;
                            public $nombre;
                            public $tipo;

                            function __construct($nombre,$patas,$tipo){
                                $this->nombre = $nombre;
                                $this->patas = $patas;
                                $this->tipo = $tipo;
                               
                            }
                        
                            public function getDesc(){
                                if ($this->patas == 0){
                                    return " Tu mascota es un " . $this->tipo . " se llama " . $this->nombre . " y no tiene patas";   
                                }else {
                                    return " Tu mascota es un " . $this->tipo . " se llama " . $this->nombre . " y tiene " . $this->patas . " patas";
                                }
                                
                            }
                        }

                        $perro = new Mascota("Tom",4,"perro");
                        $gato = new Mascota("Toli",4,"gato");
                        $pez = new Mascota("Xundaru",0,"pez");


                        echo $perro->getDesc() . "<br>";
                        echo $gato->getDesc() . "<br>";
                        echo $pez->getDesc() . "<br>";
                    ?>
                </div>
            </div>

            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Herencia</h3>

                    <?php
                    class Masscota {
                        public $nombre;
                        public $patas;                           
                    

                    function __construct($nombre,$patas){
                        $this->nombre = $nombre;
                        $this->patas = $patas;
                    }

                    function eat(){
                        return "Estoy comiendo";
                    
                    }
                    function sleep(){
                        return "Estoy durmiendo";
                    
                    }
                }

                    class Perro extends Masscota {


                    }

                    class Gato extends Masscota {
                        
                    }
                        $tommy = new Perro("Tommy",4);
                        $rocky = new Gato("rocky",4);
                        
                        echo $tommy ->eat() . "<br>";
                        echo $rocky ->sleep();
                    ?>
                </div>

            </div>
            <div class="col-4">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Hola Arturo</h3>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white text-center">
                    <?php
                    $num = 0;
                    while($num < 5){
                        $num++;
                        echo "<h3>Hola Arturo</h3>";
                        
                    }

                    ?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-info text-white text-center">
                    <h3>Ciclo For con array</h3>
                    <?php
                    $num = array(0,2,4,6,7);
                    
                    for ($i = 0; $i < 5 ; $i++){
                    echo $num[$i] . "<br>"; 
                    }    
                    ?>

                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-info text-white text-center">
                    <h3>Ciclo For con array</h3>
                    <?php
                    $num = array("Rocky","Max","Arturo","Mariana", "Hector");
                    
                    for ($i = 0; $i < 5 ; $i++){
                    echo $num[$i] . "<br>"; 
                    }    
                    ?>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white text-center">
                    <h3>For Each Other</h3>
                    <?php
                 
                 $names = array("Rocky","Max","Arturo","Mariana", "Hector");
                 foreach($names as $name){
                    echo $name . "<br>";
                 }
                    ?>

                </div>
            </div>


        </div>


    </div>
    <!--DIV CONTAINER FINALIZE -->

</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>

</html>