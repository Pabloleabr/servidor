<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // php -S 0.0.0.0:8000 para ponerlo en pagina
        const TEST = '<h1>prueba</h1>';
        echo TEST . " <p>hola mundo </p>";
        $x = 0;
        unset($x);//destruye variable
        $y = isset($x) ;//comprueba si la variable existe T y si no exite o es nula  F
        echo $y ? "true\n" : "false\n";
        var_dump($y);//vuelca a la salida el valor de la varible con tipo
        
        $array = [[1,2,3,4],[1,2,3,4],[1,2,3,4],[1,2,3,4]];
        print_r($array);

        function findBob($names) {
            $a = array_search("Bob", $names);
            return $a === 0 ? 0 : ($a ?: -1);
        }
        $a = ["Bob", "Layla", "Kaitlyn", "Patricia"];
        echo findBob($a);
        echo "\n" . array_search("Bob", $a);

        function keysAndValues($obj) {
            $sol = [[],[]];
            foreach($obj as $key => $value){
                $sol[0][] = (string) $key;
                $sol[1][] = $value;
            }
            return $sol;
        }
        $explodes =explode(" ","skljdf lksjdflj  sjadfkjsld asdf");
        print_r($explodes);
        echo implode($explodes);
        echo "";
        //arrays super globales $_GET, $_POST contienen los paramatros de sus peticiones correspondientes
        
        function concat(&$x, $y){//&hace que retenga los cambios fuera de la funcion
            $x[0] = 'm';
            return $x . $y;
        }
        $c = "pepe";
        echo "<br>" . concat($c, "hola") . "  " . $c;

        //cambia los valores recibidos a los indicadicados si es posible si no te dara un error
        function concat_garantizado(string $a,string $b): string //?string significaria que es un string que puede ser nulo
        {//tambien estan los tipos union por ejemplo int|float
            return $a . $b;
        }

        //require 'auxiliar.php'; te carga un fichero auxiliar
        /*Objetos que trabajan con fechas
        DateTimeInterface
        DatTime
        DateTimeImmobable
        DateInterval
        */
        echo "<br/>";
        $dti = new DateTimeImmutable();//tambien pueden no ponerse los ()
        echo $dti->format('d-m-y');//-> es como el . de java o python
        echo DateTime::ATOM;//acceder a constantes de classes 
        echo "<br/>" . time();
        echo $dti->add(new DateInterval('P1D'));

    ?>
    <!-- es mejor hacerlo asi que con un echo ya que separa los
    disferentes lenguajes y las resposabilidades de frontend y backend developer-->
    <?php if (isset($_GET['x'])):?> 
        <p>el valor de x es <?=/* ?= equivale a ?php echo!*/$_GET['x']; //para lo que llega con ?x=... en el url?></p>
    <?php endif ?>



    
</body>
</html>