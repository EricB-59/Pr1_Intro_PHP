<?php
//Exercise05.php
//1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.
$numero_random = rand(0,20);
echo "Numero aleatorio: ".$numero_random."<br>";

//2. Se repita la operación hasta que el total de valores sumados sea superior a 100.
//3. Muestra la suma de los valores generados.
//4. Muestra el total de números pares e impares generados.
$valores_sumados = 0;
$pares = 0; $impares = 0;
while ($valores_sumados <= 100) {
    $valor_random += rand(0,20);

    $valor_random % 2 == 0 ? $pares++ : $impares++;

    echo $valores_sumados."+".$valor_random."<br>";
    $valores_sumados += $valor_random;
}
echo $valores_sumados."<br>";
echo "Pares: ".$pares."<br>";
echo "Impares: ".$impares;