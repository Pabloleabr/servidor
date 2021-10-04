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
        
    ?>
    <!-- es mejor hacerlo asi que con un echo ya que separa los
    disferentes lenguajes y las resposabilidades de frontend y backend developer-->
    <?php if (isset($_GET['x'])) {?> 
        <p>el valor de x es <?=// ?= equivale a ?php echo! 
         $_GET['x']; //para lo que llega con ?x=... en el url?></p>
    <?php } ?>
</body>
</html>