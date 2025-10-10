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
$data['ano'] = 2012;
$data['es_bisiesto'] = (($data['ano'] % 4 == 0 && $data['ano'] % 100 != 0) || ($data['ano'] % 400 == 0));

// Exercicio 5
$data["div_titulo_ex5"] = "Exercicio 5";
$data['sueldo'] = 2500;
$data['descuento'] = $data['sueldo'] <= 1000 ? 10 : ($data['sueldo'] <= 2000 ? 5 : 3);

// Exercicio 6
$data["div_titulo_ex6"] = "Exercicio 6";
$data['nota'] = 8.75;

// Exercicio 7
$data['bebida'] = "Mondariz";
switch ($data['bebida']) {
    case "Marcilla": case "Bonka":
        $data['tipo_bebida'] = "café";
        break;
    case "Coca-Cola": case "Kas": case "Pepsi":
        $data['tipo_bebida'] = "refresco";
        break;
    case "Mondariz": case "Cabreiroá": case "Sousas":
        $data['tipo_bebida'] = "agua";
}
/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';