<?php

$string = "Esto es una prueba";
$x = 9;
$y = 99;

if(strlen($string) == 0){
    echo "<p>He recibido una cadena vacía</p>";
}

$productos = array('donuts', 'café', 'agua');
if(in_array('donuts', $productos)){
    echo '<p>Compro donuts</p>';
}
else{
    echo '<p>Compro agua</p>';
}

$productos = array('donuts', 'café', 'agua');
if(in_array('napolitana', $productos)){
    echo '<p>Compro donuts</p>';
}
elseif(in_array('refresco', $productos)){
    echo '<p>Compro refresco</p>';
}
else{
    echo '<p>Compro café</p>';
}

if($x > $y){
    echo "<p>$x es mayor que $y</p>";
}
elseif($x < $y){
    echo "<p>$x es menor que $y</p>";
}
else{
    echo "<p>$x es igual que $y</p>";
}

$seleccion = 'baloncesto';
switch($seleccion){
    case 'futbol':
        $costeAbono = 300;
        break;
    case 'baloncesto':
        $costeAbono = 150;
        break;
    case 'balonmano':
        $costeAbono = 130;
        break;
    default:
        $costeAbono = 500;
        break;
}
printf("<p>Ha seleccionado %s y el coste es %.2f€</p>", $seleccion, $costeAbono);
