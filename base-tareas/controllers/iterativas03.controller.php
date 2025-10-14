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
        $auxLength;
        $auxFinal = [];
        for($i = 0; $i < count($auxBase); $i++){
            $auxLine = explode(',', $auxBase[$i]);
            $auxFinal= array_merge($auxFinal, $auxLine);
            $auxLength = count($auxLine);
        }
        $auxFinal = bubbleSort($auxFinal);
        $result = [];
        for($i = 0; $i < count($auxFinal); $i += $auxLength){
            $result[] = array_slice($auxFinal,$i,$auxLength);
        }
        for($i = 0; $i < count($result); $i++){
            $result[$i] = implode(',', $result[$i]);
        }
        $result = implode('|', $result);

        $data['ordenados'] = $result;
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
        $lengthFirst;
        for($i = 0; $i < count($auxBase) && $check; $i++){
            $auxLine = explode(',', $auxBase[$i]);
            $auxFinal= array_merge($auxFinal, $auxLine);
            if($i === 0){
                $lengthFirst = count($auxLine);
            }
            $check = $lengthFirst == count($auxLine);
        }

        if(!$check){
            $erros['numeros'] = "Las lineas deben ser de las misma longitud";
        } else {
            for($i = 0; $i < count($auxFinal) && $check; $i++){
                $check = is_numeric($auxFinal[$i]);
            }

            if(!$check){
                $erros['numeros'] = "Solo se permiten numeros, comas e barras";
            }
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