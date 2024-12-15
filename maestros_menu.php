<?php
session_start();

if (!isset($_SESSION['maestro_sesion']) && $_SESSION['maestro_sesion'] !== true) {
    // El maestro no ha iniciado sesión, redirige a la página de inicio de sesión.
    header("Location: login_maestros.php");
    exit();
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
            justify-content: left;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .barra-superior img {
            max-height: 90%;
        }

        .barra-superior p {
            font-size: 2em;
            color: black;
            /* Texto blanco */
            margin-left: 30%;
        }

        .container {
            text-align: center;
            margin-top: 10%;
            display: flex;
            justify-content: space-around;
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
            margin: 40px;
        }

        .button_slide:hover {
            box-shadow: inset 0 200px 0 0 white;
        }

        /* Nueva clase para el botón de contacto */
        .button_contact {
            padding: 20px 40px; /* Ajusta el tamaño del botón de contacto */
            
        }
        
        p.autorescopy
        {
            position:absolute;
            justify-content:center;
            bottom:10px;
        }

        @media (max-width: 1080px) {
            .container {
                display: flex;
                justify-content: space-around;
                flex-direction: column;
            }

            .barra-superior p {
                font-size: 1.4em;
                margin-left: 25%;
            }
            
            .button_contact {
                padding: 50px 100px;
            }
            p.autorescopy
        {
            position:relative;

        }
        .barra-superior img {
            max-height: 40%;
        }
        }

        /* Nuevos estilos para posicionar el botón de contacto */
        @media (min-width: 1081px) {
            .button_contact {
                position: absolute;
                bottom: 10px;
                right: 10px;
            }
        }
        
        
        
        
        /* NI SE LES OCURRA TOCAR ESTAS 2 LINEAS DE CODIGO */
        img[src*="https://cdn.rawgit.com/000webhost/log"] { display: none; }
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }
        /* DE AQUI PARA ABAJO TOQUEN LO QUE NECESITEN MENOS LAS 2 LINEAS DE ARRIBA */
    </style>

    <title>Menu</title>
</head>
<body>
    <div class="barra-superior">
        <img src="Imagenes/LogoC.png" alt="Logo" />
        <p>¡Menu!</p>
    </div>

    <div class="container">
        
            <a href="descargar_informe.php" class="button_slide">Descargar Informe</a>
            <?php
            if ($_SESSION['maestro_ocupacion'] === "Admin") {
                echo '<a href="registrar_maestro.php" class="button_slide">Registrar Maestro</a>';
            }
            ?>
            <a href="login_maestros.php" class="button_slide">Cerrar sesión</a>
    </div>
</body>
</html>
