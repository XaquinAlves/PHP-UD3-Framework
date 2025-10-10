<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
// Xeral
$data['titulo'] = "Exercicios de estructuras de decision";

// Exercicio 1
$data["div_titulo_ex1"] = "Exercicio 1";
$data['num1'] = 28;
$data['num2'] = 14;
$data["e_divisible"] = ($data['num1'] % $data['num2'] == 0);
var_dump($data["e_divisible"]);

// Exercicio 2
$data["div_titulo_ex2"] = "Exercicio 2";
$data['n1'] = 2;
$data['n2'] = 5;
$data['n3'] = 3;
$data['maximo'] = max($data['n1'], $data['n2'], $data['n3']);

// Exercicio 3
$data["div_titulo_ex3"] = "Exercicio 3";
$data['segundos_iniciales'] = 264312;
$data['dias'] = intval($data['segundos_iniciales'] / 86400);
$data['horas'] = intval(($data['segundos_iniciales'] % 8640) / 3600);
$data['minutos'] = intval(($data['segundos_iniciales']  % 3600) / 60);
$data['segundos'] = $data['segundos_iniciales'] % 60;

// Exercicio 4
$data["div_titulo_ex4"] = "Exercicio 4";
$data['ano'] = 2025;
$data['es_bisiexto'] = ($data['ano'] % 4 == 0 && $data['ano'] % 100 != 0) || $data['ano'] % 400 == 0;



/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';