<?php
$person = array("nombre"=>"Sara", "apellido"=>"Martínez", "edad"=>23, "ciudad"=>"Barcelona");
$i = 0;
echo "EJERCICIO 1<br>";
foreach ($person as $x => $y) {
    $i++;
    echo "dato $i º: $y <br>";
}

$i = 0;
echo "<br>EJERCICIO 2<br>";
foreach ($person as $x => $y) {
    $i++;
    echo "$x: $y <br>";
}

echo "<br>EJERCICIO 3<br>";
$person = array("nombre"=>"Sara", "apellido"=>"Martínez", "edad"=>24, "ciudad"=>"Barcelona");
$i = 0;
foreach ($person as $x => $y) {
    $i++;
    echo "$x: $y <br>";
}

echo "<br>EJERCICIO 4<br>";
$person = array("nombre"=>"Sara", "apellido"=>"Martínez", "edad"=>24);
var_dump($person);

echo "<br>EJERCICIO 5<br>";
