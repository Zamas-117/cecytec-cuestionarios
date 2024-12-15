<?php
include('conexionalumnos.php');
session_start();

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor enviado desde el formulario
    $valorUsuario = $_POST['user'];

    // Escapar el valor para evitar inyección SQL (recomendado)
    $valorUsuario = mysqli_real_escape_string($conexion, $valorUsuario);

    // Consulta SQL para verificar si el valor existe en la columna Nombre_A
    $sql = "SELECT * FROM Alumno WHERE Nombre_A = '$valorUsuario'";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la consulta fue exitosa
    if ($resultado) {
        // Si la consulta devuelve resultados, significa que el valor existe en la base de datos
        if (mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $_SESSION['alumno_name'] = $valorUsuario;
            $_SESSION['id_alumno'] = $fila['Id_Alumno'];
            $_SESSION['sexo']= $fila['Sexo'];
        } else {
            $_SESSION['conexion_alumno'] = "Usuario incorrecto intentalo de nuevo";
            header("Location: login_alumnos.php");
            exit;
        }

        // Liberar los resultados
        mysqli_free_result($resultado);
    } 
}

// Variables para verificar el estado de terminado
$terminado_temo = '';
$terminado_vak = '';
$terminado_tea = '';

// Verificar si el alumno está autenticado
if (isset($_SESSION['id_alumno'])) {
    // Utilizar una consulta preparada para evitar la inyección de SQL
    $sql = "SELECT Terminado_Temo FROM Temo WHERE Id_Alumno = ?";
    // Preparar la consulta
    $Temo = mysqli_prepare($conexion, $sql);
    // Vincular parámetros (assuming $_SESSION['id_alumno'] is a string)
    mysqli_stmt_bind_param($Temo, "s", $_SESSION['id_alumno']);
    // Ejecutar la consulta
    mysqli_stmt_execute($Temo);
    // Vincular el resultado
    mysqli_stmt_bind_result($Temo, $terminado_temo);
    // Obtener el resultado
    mysqli_stmt_fetch($Temo);
    // Cerrar la consulta preparada
    mysqli_stmt_close($Temo);

    $sql = "SELECT Terminado_Vak FROM Vak WHERE Id_Alumno = ?";
    // Preparar la consulta
    $vak = mysqli_prepare($conexion, $sql);
    // Vincular parámetros
    mysqli_stmt_bind_param($vak, "s", $_SESSION['id_alumno']);
    // Ejecutar la consulta
    mysqli_stmt_execute($vak);
    // Vincular el resultado
    mysqli_stmt_bind_result($vak, $terminado_vak);
    // Obtener el resultado
    mysqli_stmt_fetch($vak);
    // Cerrar la consulta preparada
    mysqli_stmt_close($vak);

    $sql = "SELECT Terminado_Tea FROM Tea WHERE Id_Alumno = ?";
    // Preparar la consulta
    $tea = mysqli_prepare($conexion, $sql);
    // Vincular parámetros
    mysqli_stmt_bind_param($tea, "s", $_SESSION['id_alumno']);
    // Ejecutar la consulta
    mysqli_stmt_execute($tea);
    // Vincular el resultado
    mysqli_stmt_bind_result($tea, $terminado_tea);
    // Obtener el resultado
    mysqli_stmt_fetch($tea);
    // Cerrar la consulta preparada
    mysqli_stmt_close($tea);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
            background: url('Imagenes/riberas23.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .barra-superior {
            width: 100%;
            height: 200px;
            font-size: 25px;
            background-color: rgba(164, 172, 172, 0.7);
            display: flex;
            align-items: center;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .barra-superior img {
            max-height: 90%;
        }
        
        

        .button_slide {
            color: Black;
            background-color: rgba(164, 172, 172, 0.8);
            border-radius: 0px;
            padding: 50px 100px;
            font-size: 45px;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 white;
            transition: box-shadow ease-out 0.3s, ease-out 0.3s;
            text-decoration: none;
            margin: 20px;
        }

        .button_slide:hover {
            box-shadow: inset 0 200px 0 0 white;
        }

        .container {
            text-align: center;
            margin-top: 170px;
            display: flex;
            justify-content: space-around;
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .options {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .back-button {
            font-size: 1.5em;
            text-decoration: none;
            color: black;
            background-color: orange;
            border-radius: 15px;
            padding: 15px 30px;
            font-size: 18px;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 white;
            transition: box-shadow ease-out 0.3s, ease-out 0.3s;
            margin: 15px;
        }

        .back-button:hover {
            box-shadow: inset 0 100px 0 0 #2a9b54;
        }
        .backbuttomclass
        {
            position: relative;
            margin-left:2%;
            top: 30px;
            left: -40%;
            justify-content: left;
        }
        .barra-superior img {
            max-height: 90%;
        }
        .barra-superior p {
                font-size: 1.2em;
                margin-left: 14%;
            }
        @media (max-width: 1080px) {
            .container {
                display: flex;
                justify-content: space-around;
                flex-direction: column;
                margin-top:20%;
            }
.barra-superior p {
                font-size: 1.2em;
                margin-left: 7%;
            }
.barra-superior img {
            max-height: 40%;
        }
        .backbuttomclass
        {
            
            margin-left:4%;
            
        }
        
        .back-button {
            font-size: 1.5em;
            
        }
}
    /* NI SE LES OCURRA TOCAR ESTAS 2 LINEAS DE CODIGO */
        img[src*="https://cdn.rawgit.com/000webhost/log"] { display: none; }
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }
    /* DE AQUI PARA ABAJO TOQUEN LO QUE NECESITEN MENOS LAS 2 LINEAS DE ARRIBA */
    </style>
    <title>Cuestionarios</title>
</head>

<body>
    <div class="barra-superior">
        <img src="Imagenes/LogoC.png" alt="Logo" />
        <p>BIENVENID<?php if($_SESSION['sexo']=="M"){
        echo "A ";}
        else
        {
           echo "O "; 
        }
        echo $_SESSION['alumno_name']; ?></p>
    </div>
<div class="backbuttomclass"><a href="login_alumnos.php" class="back-button">Salir</a></div>
    <div class="container">
        <?php
        if ($terminado_vak != "SI") {
            echo '<a href="instrucciones_VAK.php" class="button_slide">VAK</a>';
        }
        if ($terminado_temo != "SI") {
            echo '<a href="instrucciones_TEMO.php" class="button_slide">TEMO</a>';
        }
        if ($terminado_tea != "SI") {
            echo '<a href="instrucciones_TEA.php" class="button_slide">TEA</a>';
        }
        ?>
    </div>

    
</body>

</html>
