<?php
$conexion3 = mysqli_connect("localhost", "root", "", "ciudadanos");

if (!$conexion3) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    // Conexión exitosa
    // echo "Conectado a la base de datos"; // (opcional para probar)
}
?>
