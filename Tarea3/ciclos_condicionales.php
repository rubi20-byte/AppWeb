<?php
/*
Autor: Rubí Cobos
Materia: Aplicaciones Web
Descripción: Ejemplos documentados de estructuras de control
*/

// ==========================
// CONDICIONALES
// ==========================

// IF - ELSE
$edad = 21;

if ($edad >= 18) {
    echo "Mayor de edad <br>";
} else {
    echo "Menor de edad <br>";
}

echo "<hr>";

// IF - ELSEIF - ELSE
$calificacion = 8;

if ($calificacion >= 9) {
    echo "Excelente <br>";
} elseif ($calificacion >= 7) {
    echo "Aprobado <br>";
} else {
    echo "Reprobado <br>";
}

echo "<hr>";

// SWITCH
$dia = 3;

switch ($dia) {
    case 1:
        echo "Lunes <br>";
        break;
    case 2:
        echo "Martes <br>";
        break;
    case 3:
        echo "Miércoles <br>";
        break;
    default:
        echo "Día no válido <br>";
}

echo "<hr>";

// ==========================
// CICLOS
// ==========================

// FOR
for ($i = 1; $i <= 3; $i++) {
    echo "For: " . $i . "<br>";
}

echo "<hr>";

// WHILE
$i = 1;
while ($i <= 3) {
    echo "While: " . $i . "<br>";
    $i++;
}

echo "<hr>";

// DO WHILE
$i = 1;
do {
    echo "Do While: " . $i . "<br>";
    $i++;
} while ($i <= 3);

echo "<hr>";

// FOREACH
$frutas = array("Manzana", "Plátano", "Naranja");

foreach ($frutas as $fruta) {
    echo "Fruta: " . $fruta . "<br>";
}
?>