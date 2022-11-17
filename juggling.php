<?php
/*
 * Ejemplos juggling booleano
 */

$foo = "test";
if($foo){
    echo "<p>Transforma la cadena foo en booleano y <strong>como no es una cadena vacía, devuelve true</strong></p>";
}

$foo2 = "";
if($foo2){
    echo "<p>Transforma la cadena foo2 en booleano y como es una cadena vacía, devuelve false. Esto no se ejecuta.";
}
else{
    echo "<p>Transforma la cadena foo2 en booleano y <strong>como es una cadena vacía, devuelve false</strong>. Esto SÍ se ejecuta.";
}

$numero = 876;
if($numero){
    echo "<p>Transforma el número en booleano y <strong>como es un número distinto de 0, devuelve true</strong></p>";
}

$numero2 = 0;
if($numero2){
    echo "<p>Transforma el numero2 en booleano y como es cero, devuelve false. Esto no se ejecuta.";
}
else{
    echo "<p>Transforma el numero2 en booleano y <strong>como es cero, devuelve false</strong>. Esto SÍ se ejecuta.";
}

$numero3 = -1;
if($numero3){
    echo "<p>Transforma el numero3 en booleano y <strong>como distinto de cero, devuelve true. Esto SÍ se ejecuta.</strong>";
}
else{
    echo "<p>Transforma el numero3 en booleano y <strong>como es distinto de cero, devuelve true</strong>. Esto NO se ejecuta.";
}

if(strlen($foo)){
    echo "<p>Trabaja de forma análoga con <strong>funciones</strong> transformando el valor devuelto en booleano!!</p>";
}

/*
 * Ejemplo juggling entero
 */

$test = array("10", "Hola mundo", "20 elementos", "Tengo 30", TRUE, FALSE);
foreach($test as $s){
    printf("<p>'%s' * 10 = %d</p>", $s, $s*10);
}