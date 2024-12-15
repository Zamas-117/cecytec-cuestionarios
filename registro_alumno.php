<?php
// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "u714190576_aNyRN", "ServicioCecytec2023$", "u714190576_g0zh9");

// Verificar si hubo un error en la conexión
if (mysqli_connect_errno()) {
    die("<div><p style='font-size: 30px;'>Error al conectar con la base de datos: " . mysqli_connect_error() . "</p></div>");
}

// Obtener los datos del formulario
$nombre_alumno = $_POST['nombre_alumno'];
$grupo = $_POST['grupo'];
$sexo = $_POST['sexo'];
$plantel = 'Cecytec 23';

// Verificar si ya existe un registro con el mismo nombre, grupo y sexo
$consulta_previa = "SELECT * FROM Alumno WHERE Nombre_A = '$nombre_alumno' AND Grupo = '$grupo' AND Sexo = '$sexo'";
$resultado_previo = mysqli_query($conexion, $consulta_previa);

if (mysqli_num_rows($resultado_previo) > 0) {
    session_start();
    $_SESSION['alumno_logueado'] = "Ya existe un alumno registrado con el mismo nombre, grupo y sexo.";
    header("Location: login_alumnos.php");
    exit();
}

// Establecer la zona horaria de Ciudad Juárez
date_default_timezone_set('America/Ojinaga');

// Obtener la fecha actual en formato Y-m-d
$fecha = date('Y-m-d');

// Preparar la consulta SQL
$query = "INSERT INTO Alumno (Nombre_A, Grupo, Sexo, Plantel, Fecha)
          VALUES ('$nombre_alumno', '$grupo', '$sexo', '$plantel', '$fecha')";

// Ejecutar la consulta SQL
if (mysqli_query($conexion, $query)) 
{
    session_start(); // Iniciar la sesión después de todas las operaciones de encabezado
    $_SESSION['alumno_logueado'] = "Registro Exitoso<br>";
    header("Location: login_alumnos.php"); // Redirigir al usuario a otra página
    exit();
}
else
{
    session_start(); // Iniciar la sesión después de todas las operaciones de encabezado
    $_SESSION['alumno_logueado'] = "El Registro tuvo problemas intentalo de nuevo.";
    header("Location: login_alumnos.php"); // Redirigir al usuario a otra página
    exit();
}

// Cerrar la conexión
mysqli_close($conexion);
?>
