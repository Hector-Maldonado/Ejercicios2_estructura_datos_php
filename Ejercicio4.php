<?php 
/**
 * Ejercicio 4.
 * Problema de Bucle Anidado:
 * Escribe un programa que utilice bucles anidados para imprimir 
 * un patrón de asteriscos en forma de pirámide.
 */

 function Piramide($filas) {
    for ($numFilas = 0; $numFilas <= $filas; $numFilas++) {
        
        for ($numEspacios = 0; $numEspacios <= $filas - $numFilas - 1; $numEspacios++) {
            print " ";
        }
        for ($asteriscos = 0; $asteriscos <= (2 * $numFilas + 1); $asteriscos++) {
            print "*";
        }
        print "\n";
}
}

$piramide = Piramide(10);

print_r($piramide);

?>