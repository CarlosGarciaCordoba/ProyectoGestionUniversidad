<?php
$servidor = "localhost"; // Nombre del servidor
$usuario = "root@localhost"; // Nombre de usuario de la base de datos
$contrasena = ""; // Contraseña de la base de datos
$base_de_datos = "siscolegio"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}
?>
