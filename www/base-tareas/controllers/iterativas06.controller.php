<?php
$data = [];
$data['titulo'] = "Ejercicio 6";
$data['div_titulo'] = "Criba de Eratóstenes";



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


include 'views/templates/header.php';
include 'views/iterativas06.view.php';
include 'views/templates/footer.php';