<?php
// Incluir el archivo de conexión
include('conexionmaestros.php');
session_start();

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor enviado desde el formulario
    $valorEmail = $_POST['correo'];
    $valorContra = $_POST['contra'];

    // Utilizar prepared statements para evitar SQL Injection
    $sql = "SELECT * FROM Maestro WHERE Correo = ? AND Contra = ?";
    if ($stmt = mysqli_prepare($conexion, $sql)) {
        // Enlazar parámetros
        mysqli_stmt_bind_param($stmt, "ss", $valorEmail, $valorContra);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            // Obtener resultados
            $resultado = mysqli_stmt_get_result($stmt);

            // Verificar si la consulta devuelve resultados
            if (mysqli_num_rows($resultado) > 0) {
                // Obtener la fila como un array asociativo
                $fila = mysqli_fetch_assoc($resultado);

                // Obtener el valor de "Nombre_M"
                $nombreMaestro = $fila['Nombre_M'];

                // Obtener la ocupación del maestro
                $_SESSION['maestro_ocupacion'] = $fila['Ocupacion'];
                
                // Iniciar sesión y asignar el nombre del maestro
                $_SESSION['maestro_name'] = $nombreMaestro;
                $_SESSION['maestro_sesion'] = TRUE; // Corregido aquí
                header("Location: maestros_menu.php");
                exit();
            } else {
                $_SESSION['profesor_error'] = "Usuario incorrecto, inténtalo de nuevo<br>";
                header("Location: login_maestros.php");
                exit();
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($conexion);
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    }
}


?>
