<?php

include("conexion2.php");

if (isset($_POST['registrar']) &&
    !empty(trim($_POST['NOMBRE'])) &&
    !empty(trim($_POST['A_PATERNO'])) &&
    !empty(trim($_POST['A_MATERNO'])) &&
    !empty(trim($_POST['LOCALIDADCOMUNIDAD'])) &&
    !empty(trim($_POST['MUNICIPIO']))) {

    $nombre     = mysqli_real_escape_string($conexion2, trim($_POST['NOMBRE']));
    $appaterno  = mysqli_real_escape_string($conexion2, trim($_POST['A_PATERNO']));
    $apmaterno  = mysqli_real_escape_string($conexion2, trim($_POST['A_MATERNO']));
    $localidad  = mysqli_real_escape_string($conexion2, trim($_POST['LOCALIDADCOMUNIDAD']));
    $municipio  = mysqli_real_escape_string($conexion2, trim($_POST['MUNICIPIO']));

    $sql = "INSERT INTO visitantes (NOMBRE, A_PATERNO, A_MATERNO, LOCALIDADCOMUNIDAD, MUNICIPIO)
            VALUES ('$nombre', '$appaterno', '$apmaterno', '$localidad', '$municipio')";

    $resultado = mysqli_query($conexion2, $sql);

    if ($resultado) {
        echo "<h3 class='correcto'>* VISITANTE REGISTRADO *</h3>";
    } else {
        echo "<h3 class='incorrecto'>* INTENTE NUEVAMENTE *</h3>";
        echo "Error: " . mysqli_error($conexion);
    }
} else {
    echo "<h3 class='incorrecto'>* IMPORTANTE: DEBE COMPLEMENTAR TODOS LOS DATOS *</h3>";
}
?>
