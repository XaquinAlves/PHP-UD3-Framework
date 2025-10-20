<?php

$numeroUsos = 0;

function esDivisible(int $numero, int $divisor) : bool{
    global $numeroUsos;
    $numeroUsos++;
    return $numero % $divisor == 0;
}

function contieneTodasVocales(string $texto): bool{
    if(strlen($texto) > 0){
        
    }
    else{
        throw new Exception("Cadena vacía");
    }
}