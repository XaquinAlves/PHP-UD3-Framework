<?php
echo '<p>>Versión de php: '.phpversion().'</p>';

$var1 = 30 + "3";
echo '<p>Sumando 30 + "3": '.$var1.'</p>';

$varBool = 30 + true;
echo '<p>Sumando 30 + true: '.$varBool.'</p>';


$var = 30 + "3 jugadores";
echo '<p>Sumando 30 + "3 jugadores": '.$var.'</p>';

$bool = ("" == 0);
echo 'Comparación de "" == 0: ';
var_dump($bool);


echo '<p>Sumando 30 + "hola"';
$var2 = 30 + 'hola';
echo $var2;
echo '</p>';

