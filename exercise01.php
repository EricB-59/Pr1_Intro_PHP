<?php
// Variables numéricas
$numero1 = 2;
$numero2 = 3;

// Operaciones matematicas
$sumar = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$division = $numero1 / $numero2;

echo "------SUMA-----RESTA------DIVISIÓN-----<br>";
echo "La suma de $numero1 y $numero2 es igual $sumar"."<br>";
echo "La resta de $numero1 y $numero2 es igual $resta"."<br>";
echo "La division de $numero1 y $numero2 es igual $division";

// Muestra cuál es mayor, cuál menor o si son iguales.
//3. Si las dos variables son valores superiores a 1,
//a. calcula el área del triángulo con base y altura igual a los valores de las variables.
echo "<br><br>------COMPARACIÓN-----<br>";

if($numero1 > $numero2){
    echo "$numero1 es mayor a $numero2"."<br>";
} else {
    echo "$numero2 es mayor a $numero1"."<br>";
}

echo "<br><br>------SUPERIOR A 1-----<br>";
if($numero1 > 1){
    echo "$numero1 es mayor a 1"."<br>";
}else{
    echo "$numero1 es menor a 1"."<br>";
}
if($numero2 > 1){
    echo "$numero2 es mayor a 1"."<br>";
}
else{
    echo "$numero2 es menor a 1"."<br>";
}