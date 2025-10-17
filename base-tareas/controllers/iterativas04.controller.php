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
        $aux = explode('', $_POST['entradatext']);
        $letters = [];

        for($i = 0; $i < count($aux); $i++){
            if(preg_match("/[A-Za-z]/",$aux[$i])){
                $letters["$aux[$i]"]++;
            }
        }

        $data['cuenta_letras'] = $letters;
    }
}

function checkForm(array $data) : array {
    $erros = [];

    if(empty($data['entradanums'])){
        $erros['numeros'] = "Inserte un valor no campo";
    } else {

    }

    return $erros;
}



include 'views/templates/header.php';
include 'views/iterativas04.view.php';
include 'views/templates/footer.php';