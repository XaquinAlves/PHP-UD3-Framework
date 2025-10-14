<?php
$data = [];
$data['titulo'] = "Ejercicio 3";
$data['div_titulo'] = "Ordenar matriz";



if(!empty($_POST)){
    //Comprobar
    $erros = checkForm($_POST);
    $data['input_numeros'] = $_POST['entradanums'];

    if(count($erros) > 0) {
        $data['erros'] = $erros;
    }else {
        $auxBase = explode('|', $_POST['entradanums']);
        print_r($auxBase);
        $auxFinal = [];
        for($i = 0; $i < count($auxBase); $i++){
            $auxLine = explode(',', $auxBase[$i]);
            $auxFinal= array_merge($auxFinal, $auxLine);
        }
        print_r($auxFinal);
        $data['ordenados'] = implode(',', $auxFinal);
    }
}

function checkForm(array $data) : array {
    $erros = [];

    if(empty($data['entradanums'])){
        $erros['numeros'] = "Inserte un valor no campo";
    } else {
        $check = true;
        $auxBase = explode('|', $_POST['entradanums']);
        $auxFinal = [];
        for($i = 0; $i < count($auxBase); $i++){
            $auxLine = explode(',', $auxBase[$i]);
            $auxFinal= array_merge($auxFinal, $auxLine);
        }

        for($i = 0; $i < count($auxFinal) && $check; $i++){
                $check = is_numeric($auxFinal[$i]);
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
include 'views/iterativas03.view.php';
include 'views/templates/footer.php';