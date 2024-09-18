<?php
// 1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:
// 2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la primera con un bucle for.
// 3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while.
// 4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle do/while.
//a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez el valor de la primera variable
$numero1 = "32";
echo $numero1."<br>";
$numero2 = "15";

echo "// 2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la primera con un bucle for.<br>";
for ($i = 0; $i < $numero1; $i++) {
    if  ($i%2 == 0) {
        echo "$i | ";
    }
}

echo "<br><br>// 3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while.<br>";
while (!$numero2 == 0){
    echo "$numero2 | ";
    $numero2 = $numero2 - 1;
}

echo "<br><br>// 4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle do/while.<br>";
do {
    
} while ($a <= 10);