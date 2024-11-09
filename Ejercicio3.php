<?php
/*
 *Ejercicio 3.
 * Problema de Frecuencia de Caracteres:
 * Implementa una función que tome una cadena de texto 
 * y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.
 */

function frecuenciaCaracteres($cadena)
{
    return array_count_values(str_split($cadena));
}
$cadena = "Hector Maldonado";
$frecuencia = frecuenciaCaracteres($cadena);

print_r($frecuencia);
