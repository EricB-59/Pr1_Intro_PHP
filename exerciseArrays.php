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
$person["edad"] = 24;
$i = 0;
foreach ($person as $x => $y) {
    $i++;
    echo "dato $i º: $y <br>";
}

echo "<br>EJERCICIO 4<br>";
unset($person["ciudad"]);
var_dump($person);

echo "<br><br>EJERCICIO 5<br>";
$letters = "a,b,c,d,e,f";
$arrayLetters = explode(",", $letters);

for($i = count($arrayLetters); $i > 0; $i--) {
    echo "letter $i".$arrayLetters[$i-1]."<br>";
}

echo "<br><br>EJERCICIO 6<br>";
$notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
arsort($notas);

echo "Notas de los estudiantes: ";
foreach ($notas as $nombre => $nota) {
    echo $nombre.":".$nota."\n";
}