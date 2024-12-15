<?php

include('conectarbasededatos.php');

// Consulta SQL para obtener todos los datos de la tabla Alumnos
$sql = "SELECT * FROM Maestro";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Puedes realizar cualquier otra operación con los datos si es necesario
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

// No cierres la conexión aquí; permitirá que otros archivos utilicen la misma conexión.
?>
