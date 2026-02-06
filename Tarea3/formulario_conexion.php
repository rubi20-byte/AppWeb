<?php
/*
Autor: Rubí Cobos
Descripción: Archivo PHP que recibe y muestra
los datos enviados desde un formulario HTML
*/

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

// Mostrar datos
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad;
?>