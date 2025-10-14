<?php
$data = [];
$data['titulo'] = "Ejercicio 2";
$data['div_titulo'] = "Ordenar numeros";



if(!empty($_POST)){
    //Comprobar
    $erros = checkForm($_POST);
    $data['input_numeros'] = $_POST['entradanums'];

    if(count($erros) > 0) {
        $data['erros'] = $erros;
    }else {
        $aux = explode(',', $_POST['entradanums']);
        $data['ordenados'] = implode(',', bubbleSort($aux));
    }
}

function checkForm(array $data) : array {
    $erros = [];

    if(empty($data['entradanums'])){
        $erros['numeros'] = "Inserte un valor no campo";
    } else {
        $check = true;
        $aux = explode(',', $data['entradanums']);
        $i = 0;
        while($i < count($aux) && $check) {
            $check = is_numeric($aux[$i]);
            $i++;
        }
        if(!$check){
            $erros['numeros'] = "Solo se permiten numeros e comas";
        }
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
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}


include 'views/templates/header.php';
include 'views/iterativas02.view.php';
include 'views/templates/footer.php';