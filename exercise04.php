<?php
//1. Genere un número aleatorio entre el 1 y el 6 para simular la Ɵrada de un dado.
$numero_random = rand(1,6);

//2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara
//opuesta. (1:5, 2:6, 3:4)
switch ($numero_random) {
    case 1:
        echo "Valor obtenido: ".$numero_random." / Uno | Cara opuesta: 6 / Seis";
        break;
    case 2:
        echo "Valor obtenido: ".$numero_random." / Dos | Cara opuesta: 5 / Cinco";
        break;
    case 3:
        echo "Valor obtenido: ".$numero_random." / Tres | Cara opuesta: 4 / Cuatro";
        break;
    case 4:
        echo "Valor obtenido: ".$numero_random." / Cuatro | Cara opuesta: 3 / Tres";
        break;
    case 5:
        echo "Valor obtenido: ".$numero_random." / Cinco | Cara opuesta: 2 / Dos";
        break;
    case 6:
        echo "Valor obtenido: ".$numero_random." / Seis | Cara opuesta: 1 / Uno";
        break;
    default:
        echo "Valor no reconocido";
        break;
}