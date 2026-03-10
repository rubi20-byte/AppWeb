<?php
$num_estudiantes = isset($_POST['num_estudiantes']) ? (int)$_POST['num_estudiantes'] : 0;
$estudiantes = isset($_POST['estudiantes']) ? $_POST['estudiantes'] : [];

function mostrarFormularioEstudiantes($num) {
    echo '<form method="post">';
    echo '<input type="hidden" name="num_estudiantes" value="' . $num . '">';
    for ($i = 1; $i <= $num; $i++) {
        echo '<h3>Estudiante ' . $i . '</h3>';
        echo '<label>Matricula:</label> <input type="text" name="estudiantes[' . $i . '][matricula]" required><br>';
        echo '<label>Sexo:</label> ';
        echo '<input type="radio" name="estudiantes[' . $i . '][sexo]" value="M" required> Masculino ';
        echo '<input type="radio" name="estudiantes[' . $i . '][sexo]" value="F"> Femenino <br>';
        echo '<label>Nombre:</label> <input type="text" name="estudiantes[' . $i . '][nombre]" required><br><br>';
    }
    echo '<input type="submit" value="Capturar">';
    echo '</form>';
}

function procesarEstudiantes($estudiantes) {
    echo '<h2>Nombres de las mujeres:</h2>';
    $mujeres = [];
    foreach ($estudiantes as $est) {
        if ($est['sexo'] == 'F') {
            $mujeres[] = $est['nombre'];
        }
    }
    if (empty($mujeres)) {
        echo 'No hay mujeres en la lista.';
    } else {
        echo '<ul>';
        foreach ($mujeres as $nombre) {
            echo '<li>' . htmlspecialchars($nombre) . '</li>';
        }
        echo '</ul>';
    }
    echo '<br><a href="index.html">Volver a empezar</a>';
}

if (empty($estudiantes)) {
    mostrarFormularioEstudiantes($num_estudiantes);
} else {
    procesarEstudiantes($estudiantes);
}
?>