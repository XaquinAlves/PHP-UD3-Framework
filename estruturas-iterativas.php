<?php
define("WHILE_LIMIT", 10);

$_map = array(
    'Pepito' => 2500,
    'Manolo' => 1800,
    'María' => 2100,
    'Paula' => 3250,
    'Ángela' => 2150,
    'José' => 1900
);

$_array = [1, 6, 8, 9, 21, 33, 44, 56];
echo "<h2>While básico</h2>";
//Uso de while
$i = 0;
while($i < WHILE_LIMIT){
    printf("<p>Iteración número: %d</p>", $i);
    $i++;
}

$i = 0;
$elementoBuscado = 21;
//Recorrido de un array buscando un valor
while(count($_array) > $i && $elementoBuscado != $_array[$i]){
    $i++;
}
echo "<h2>Búsqueda con while</h2>";
if($elementoBuscado == $_array[$i]){
    printf("<p class='text-success'>Elemento %d atopado na posición %d do array</p>", $elementoBuscado, $i);
}
else{
    printf("<p class='text-danger'>Elemento %d non atopado no array</p>", $elementoBuscado, $i);
}

//Uso de do..while
$i = 0;
$elementoBuscado = 21;
do{
    $aux = $_array[$i]; 
}while($aux != $elementoBuscado && ++$i < count($_array) );

echo "<h2>Búsqueda con do .. while</h2>";

if($elementoBuscado == $_array[$i]){
    printf("<p class='text-success'>Elemento %d atopado na posición %d do array</p>", $elementoBuscado, $i);
}
else{
    printf("<p class='text-danger'>Elemento %d non atopado no array</p>", $elementoBuscado, $i);
}

echo "<h2>For para recorrer array </h2>";
//for para recorrer un array
echo '<p>Imprimo por pantalla o array</p>';
echo '<p>';
for($i = 0; $i < count($_array); $i++){
    printf("%d ", $_array[$i]);
}
echo '</p>';

//Uso de foreach para recorrer array
echo "<h2>Foreach recorrer array</h2>";
echo '<p>Imprimo por pantalla o array con <strong>foreach</strong></p>';
echo '<p>';
foreach($_array as $num){
    printf("%d ", $num);
}
echo '</p>';

echo "<h2>Foreach recorrer array indexado</h2>";
//Uso de foreach para recorrer array indexado por clave valor
echo '<p>Imprimo por pantalla o array indexado con <strong>foreach</strong></p>';
echo '<p>';
foreach($_map as $clave => $valor){
    printf("<p>%s -> %d</p>", $clave, $valor);
}
echo '</p>';


//https://www.php.net/manual/en/array.sorting.php
echo "<h2>Foreach recorrer array ordenado por clave</h2>";
ksort($_map);
echo '<p>Ordeno o  array  indexado por clave e o amoso con <strong>foreach</strong></p>';
echo '<p>';
foreach($_map as $clave => $valor){
    printf("<p>%s -> %d</p>", $clave, $valor);
}
echo '</p>';

echo "<h2>Foreach recorrer array ordenado por valor</h2>";
asort($_map);
echo '<p>Ordeno o array indexado por valor e o amoso con <strong>foreach</strong></p>';
echo '<p>';
foreach($_map as $clave => $valor){
    printf("<p>%s -> %d</p>", $clave, $valor);
}
echo '</p>';

echo "<h2>For tablas de multiplicar</h2>";
//Uso de for para mostrar las tablas de multiplicar
echo "<p>----------------</p>";
for($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10; $j++){
        printf("<p>%d x %d = %d</p>", $i, $j, $i*$j);
    }
    echo "<p>----------------</p>";
}