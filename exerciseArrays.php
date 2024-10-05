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

echo "<br><br>EJERCICIO 7<br>";
// Calcular la media de las notas
$suma_notas = array_sum($notas); // Sumar todas las notas
$num_estudiantes = count($notas); // Número de estudiantes
$media = $suma_notas / $num_estudiantes; // Calcular la media

echo "<br>Media de las notas: " . number_format($media, 2) . "<br>";

echo "<br>Alumnos con nota superior a la media:<br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo $nombre . "<br>";
    }
}

echo "<br><br>EJERCICIO 8<br>";
// Encontrar la nota más alta y el mejor alumno
$nota_maxima = max($notas); // Obtener la nota más alta
$mejor_alumno = array_search($nota_maxima, $notas); // Buscar el nombre del alumno con la nota más alta

echo "<br>La nota mas alta es: " . $nota_maxima . " y el mejor alumno es:" . $mejor_alumno . "<br>";
