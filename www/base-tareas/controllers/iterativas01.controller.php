<?php
$data = [];
$data['titulo'] = "Ejercicio 1";
$data['div_titulo'] = "Numeros maior e menor";



if(!empty($_POST)){
    //Comprobar
    $erros = checkForm($_POST);
    $data['input_numeros'] = $_POST['entradanums'];

    if(count($erros) > 0) {
        $data['erros'] = $erros;
    }else {
        $aux = explode(',', $_POST['entradanums']);
        $data['maior'] = maxValue($aux);
        $data['menor'] = minValue($aux);
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

function maxValue(array $numlist) : int{
    $max = PHP_INT_MIN;
    foreach($numlist as $num){
        if($num > $max){
            $max = $num;
        }
    }
    return $max;
}

function minValue(array $numlist) : int {
    $min = PHP_INT_MAX;
    foreach($numlist as $num){
        if($num < $min){
            $min = $num;
        }
    }
    return $min;
}


include 'views/templates/header.php';
include 'views/iterativas01.view.php';
include 'views/templates/footer.php';