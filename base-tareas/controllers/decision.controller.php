<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
// Xeral
$data['titulo'] = "Exercicios de estructuras de decision";

//Exercicio 1
$data["div_titulo_ex1"] = "Exercicio 1";
$data['num1'] = 28;
$data['num2'] = 14;
$data["e_divisible"] = ($data['num1'] % $data['num2'] == 0);
var_dump($data["e_divisible"]);

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';