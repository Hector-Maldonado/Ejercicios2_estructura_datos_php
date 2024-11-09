<?php 
/**
 * Ejercicio 2
 * Problema de Suma de Números Pares:
 * Crea un script que sume todos los números pares en un array 
 * de números enteros.
 */

 function numerosPares($array){
    $sumaPares = 0;

    foreach ($array as $numero) {
        if ($numero % 2 === 0) {
            $sumaPares += $numero;
        }
    }

    return $sumaPares;
}

$array = [1,2,3,4,5,6,7,8,9,10];

$sumaNumerosPares = numerosPares($array);
print_r($sumaNumerosPares);

?>