<?php

define("IVA", 21);
define("NOMBRE_EMPRESA", "MI EMPRESA");
define("PRODUCTOS", ["Cargadores", "Portátiles", "Móviles"]);

printf("<p>Iva: %d, Empresa: %s, Productos:</p>", IVA, NOMBRE_EMPRESA);
var_dump(PRODUCTOS);

$precio = 10;
printf("<p>Precio sin IVA: %.2f€, Precio con IVA: %.2f€", $precio, getTotal($precio));

function getTotal(float $precioBase) : float{
    return $precioBase * (1 + (IVA/100));
}
