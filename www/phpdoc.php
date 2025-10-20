<?php

/**
 * @author rgcenteno (rgcenteno@edu.xunta.gañ)
 * @copyright CC-NC
 * 
 */


/**
 * Devuelve una cadena con un texto de saludo a la persona pasada como parámetro
 * @param string $persona a quién queremos saludar
 * @return string Cadena con el saludo a la persona
 * @throws Exception Se recibe una cadena vacía
 */
function saluda(string $persona) : string{
    if(strlen($persona) > 0){
        return sprintf("Encantado de conocerte %s. Disfruta del curso.", $persona);
    }
    else{
        throw new Exception("Inserte un nombre de persona");
    }
}

