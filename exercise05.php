<?php
//Exercise05.php
//1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla inicialmente.
$numero_random = rand(0, 20);
echo "Número aleatorio inicial: ".$numero_random."<br>";

$valores_sumados = 0;
$pares = 0;
$impares = 0;

// Bucle para repetir la operación hasta que la suma de los valores sea superior a 100
while ($valores_sumados <= 100) {
    $valor_random = rand(0, 20);

    if ($valor_random % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }

    echo "Número aleatorio generado: ".$valor_random."<br>";
    $valores_sumados += $valor_random;

    // Mostrar la suma
    echo "Suma parcial: ".$valores_sumados."<br><br>";
}

// Imprimir los resultados finales
echo "Suma total de valores generados: ".$valores_sumados."<br>";
echo "Total de números pares: ".$pares."<br>";
echo "Total de números impares: ".$impares."<br>";

