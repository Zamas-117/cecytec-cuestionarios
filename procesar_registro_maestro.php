<?php
include('conexionmaestros.php');
session_start();

if (!isset($_SESSION['maestro_sesion']) && $_SESSION['maestro_sesion'] !== true) {
    // El maestro no ha iniciado sesión, redirige a la página de inicio de sesión.
    header("Location: login_maestros.php");
    exit();
} 

// Verifica si se enviaron datos por el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos del formulario
    $nombre = $_POST['nombre'];
    $instituto = $_POST['instituto'];
    $correo = $_POST['correo'];
    $ocupacion = $_POST['ocupacion'];
    $contrasena = $_POST['contrasena']; // Hashea la contraseña

    // Prepara la consulta SQL para insertar un nuevo maestro
    $sql = "INSERT INTO Maestro (Nombre_m, Correo, Contra, Instituto, Ocupacion) VALUES (?, ?, ?, ?, ?)";

    // Prepara la sentencia SQL
    $stmt = mysqli_prepare($conexion, $sql);

    // Vincula los parámetros con los valores
    mysqli_stmt_bind_param($stmt, "sssss", $nombre, $correo, $contrasena, $instituto, $ocupacion);

    // Ejecuta la sentencia SQL
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['registro_mensaje']="Registro Exitoso.<br>";
        header('Location: registrar_maestro.php');
    } else {
        $_SESSION['registro_mensaje']="Algo salio mal, Intentalo de nuevo.<br>";
        header('Location: registrar_maestro.php');
    }

    // Cierra la sentencia y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
} else {
    // Si no se enviaron datos por POST, muestra un mensaje de error
    echo "No se han recibido datos del formulario.";
}
?>
