<?php
$data = [];
$data['titulo'] = "Ejercicio 5";
$data['div_titulo'] = "Contar palabras";



if(isset($_POST['enviar'])){
    //Comprobar
    $erros = checkForm($_POST);
    $data['input_texto'] = $_POST['entradatext'];

    if(count($erros) > 0) {
        $data['erros'] = $erros;
    }else {
        //Pasamos a minúsculas y separamos en un array
        $aux = explode(" ",strtolower($_POST['entradatext']));
        $words = [];
        //Contamos las palabras
        for($i = 0; $i < count($aux); $i++){
            //Limpiamos puntuación final
            if(preg_match("/[a-z]+[\.,]/", $aux[$i])){
                $aux[$i] = preg_replace("/[\.,]/", "", $aux[$i]);
            }

            if(array_key_exists($aux[$i], $words)){
                $words[$aux[$i]] += 1;
            } else {
                $words[$aux[$i]] = 1;
            }
        }
        //Pasamos el array a un formato ordenable
        $words_sorted = [];

        foreach($words as $key => $value){
            $words_sorted[] = [$key, $value];
        }
        //Ordenamos el array y lo invertimos para tener de mayor a menor
        $words_sorted = array_reverse(bubbleSort($words_sorted));
        //Creamos el string de salida
        $words_string = "";

        for($i = 0; $i < count($words_sorted); $i++){

            $words_string .= $words_sorted[$i][0] . ": " . $words_sorted[$i][1];

            if($i < count($words_sorted) - 1){
                $words_string .= ", ";
            } else {
                $words_string .= ".";
            }
        }

        $data['cuenta_palabras'] = $words_string;
    }
}

function checkForm(array $data) : array {
    $erros = [];

    if(empty($data['entradatext'])){
        $erros['texto'] = "Inserte un valor no campo";
    }

    return $erros;
}

function bubbleSort(array $arr) : array {
    $n = count($arr);

    // Traverse through all array elements
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {

            // Swap if the element found is
            // greater than the next element
            if ($arr[$j][1] > $arr[$j + 1][1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}


include 'views/templates/header.php';
include 'views/iterativas05.view.php';
include 'views/templates/footer.php';