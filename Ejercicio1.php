<?php

/**
 * Ejercicio 1.
 *Problema de Lista Invertida:
 *Escribe un programa que tome un array de números 
 *y devuelva una nueva lista que contenga los mismos elementos en orden inverso.
 */

function listaInvertida($array)
{

    return array_reverse($array);
}
$array = [1, 2, 3, 4, 5, 6, 7, 8];

$numerosInvertidos = listaInvertida($array);

print_r($numerosInvertidos);
