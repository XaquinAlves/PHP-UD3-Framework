<?php
$data = [];
$data['titulo'] = "Ejercicio 4";
$data['div_titulo'] = "Contar caracteres";



if(isset($_POST['enviar'])){
    //Comprobar
    $erros = checkForm($_POST);
    $data['input_texto'] = $_POST['entradatext'];

    if(count($erros) > 0) {
        $data['erros'] = $erros;
    }else {
        //Pasamos a minúsculas y separamos en un array
        $aux = str_split(strtolower($_POST['entradatext']));
        $letters = [];
        //Recorremos el array contando las letras con un regex
        for($i = 0; $i < count($aux); $i++){
            if(preg_match("/[a-z]/", $aux[$i])){

                if(array_key_exists($aux[$i], $letters)){
                    $letters[$aux[$i]] += 1;
                } else {
                    $letters[$aux[$i]] = 1;
                }

            }
        }
        //Pasamos el array a un formato ordenable
        $letters_sorted = [];

        foreach($letters as $key => $value){
            $letters_sorted[] = [$key, $value];
        }
        //Ordenamos el array y lo invertimos para tener de mayor a menor
        $letters_sorted = array_reverse(bubbleSort($letters_sorted));
        //Creamos el string de salida
        $letters_string = "";

        for($i = 0; $i < count($letters_sorted); $i++){

            $letters_string .= $letters_sorted[$i][0] . ": " . $letters_sorted[$i][1];

            if($i < count($letters_sorted) - 1){
                $letters_string .= ", ";
            } else {
                $letters_string .= ".";
            }
        }

        $data['cuenta_letras'] = $letters_string;
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
include 'views/iterativas04.view.php';
include 'views/templates/footer.php';