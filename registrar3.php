<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("conexion3.php");

if (
    isset($_POST['NOMBRE_COMPLETO']) &&
    isset($_POST['MUNICIPIO']) &&
    isset($_POST['CORREO_ELECTRONICO']) &&
    isset($_POST['TRAMITE']) &&
    isset($_POST['DUDA_ESPECIFICA'])
) {
    $nombre    = mysqli_real_escape_string($conexion3, trim($_POST['NOMBRE_COMPLETO']));
    $municipio = mysqli_real_escape_string($conexion3, trim($_POST['MUNICIPIO']));
    $correo    = mysqli_real_escape_string($conexion3, trim($_POST['CORREO_ELECTRONICO']));
    $tramite   = mysqli_real_escape_string($conexion3, trim($_POST['TRAMITE']));
    $duda      = mysqli_real_escape_string($conexion3, trim($_POST['DUDA_ESPECIFICA']));

    $sql = "INSERT INTO dudas_visitantes (NOMBRE_COMPLETO, MUNICIPIO, CORREO_ELECTRONICO, TRAMITE, DUDA_ESPECIFICA)
            VALUES ('$nombre', '$municipio', '$correo', '$tramite', '$duda')";

    if (mysqli_query($conexion3, $sql)) {
        echo "<span style='color:green; font-weight:bold;'>✔ Duda registrada correctamente</span>";
    } else {
        echo "<span style='color:red;'>❌ Error al registrar la duda: " . mysqli_error($conexion3) . "</span>";
    }
} else {
    echo "<span style='color:red;'>⚠ Debes llenar todos los campos</span>";
}
?>

