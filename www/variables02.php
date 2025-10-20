<?php

$variableGlobal = 0;

function incrementarVariableGlobal(int $val) : void{
    global $variableGlobal;
    $variableGlobal += $val;
}

function incrementarVariable(int $val) : void{
    $variableGlobal = 0;
    $variableGlobal += $val;
}

printf("<p>VariableGlobal: %d</p>", $variableGlobal); #Ahora variable global vale 0!!
echo '<p>Ejecutamos SIN global</p>';
incrementarVariable(10);
printf("<p>VariableGlobal: %d</p>", $variableGlobal); #Ahora variable global vale 0!!
echo '<p>Ejecutamos CON global</p>';
incrementarVariableGlobal(10);
printf("<p>VariableGlobal: %d</p>", $variableGlobal); #Ahora variable global vale 10!!

/* Al contrario que en Java, yo puedo definir una variable dentro de un bloque de código y la variable será accesible desde fuera. 
 * Esto no ocurre en el caso de las variables locales de funciones o métodos de clase.
 */
$time = time();
if($time % 2 == 0){
    $resultado = "Es par";
}
else{
    $resultado = "Es impar";
}

printf("<p>%d %s</p>", $time, $resultado); #resultado tiene valor pese a haber sido definido dentro un if .. else!