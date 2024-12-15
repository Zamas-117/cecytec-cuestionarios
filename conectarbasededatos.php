<?php
$host = "localhost";
$usuario = "u714190576_aNyRN";
$contraseña = "ServicioCecytec2023$";
$base_de_datos = "u714190576_g0zh9";

$conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

?>