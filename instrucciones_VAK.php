<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>VAK - Test visual, Auditivo y Kinestesico</title>
</head>
<style>
    /* NI SE LES OCURRA TOCAR ESTAS 2 LINEAS DE CODIGO */
    img[src*="https://cdn.rawgit.com/000webhost/log"] { display: none; }
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }
    /* DE AQUI PARA ABAJO TOQUEN LO QUE NECESITEN MENOS LAS 2 LINEAS DE ARRIBA */

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
        position: relative;
        font-size: 25px;
        height: 200px;
        background-color: rgba(164, 172, 172, 0.7);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: left;
        padding: 0 20px;
        box-sizing: border-box;
        width: 100%;
    }

    .barra-superior img {
        max-height: 90%;
    }

    .barra-superior p {
        font-size: 2em;
        margin: 0;
        color: black;
        margin-left: calc(65% - 35%);
    }

    .button-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .back-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.5em;
        top: 30px;
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

    .button_slide {
        color: Black;
        background-color: rgba(164, 172, 172, 0.8);
        border-radius: 0px;
        margin-left: 50%;
        padding: 40px 80px;
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
    
    .texto-blanco {
        background-color: white;
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        width: 90%;  /* Ajusta el ancho para cubrir más */
        max-width: 1200px; /* Ancho máximo para evitar que sea demasiado ancho */
        margin: 20px auto; /* Centra el cuadro horizontalmente */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .texto-blanco h2,
    .texto-blanco p,
    .texto-blanco h3 {
        font-size: 25px;
    }
</style>
<body>
    <div class="barra-superior">
        <img src="Imagenes/LogoC.png" alt="Logo" />
        <p>VAK - Test visual, Auditivo y Kinestesico</p>
    </div>

    <div class="texto-blanco">
        <h2>Procedencia: Departamento de Orientación Educativa</h2>

        <p>
            División: Psychometry Research<br>
            CECyTED
        </p>

        <p>
            El presente TEST se encuentra basado en las pruebas de detección de Canales Perceptivos de D. Kolb y es de libre distribución, lo que significa que es GRATUITO pues así lo ha querido el autor, si se te intenta cobrar por su aplicación por favor recházalo y notifícalo.<br>
            El único dueño es Francisco Renato Arellano Herrera"
        </p>

        <h3>Instrucciones:</h3>
        <p>
            A continuación encontrarás una lista de actividades, las cuales están agrupadas de 3 en 3, lo que tienes que hacer es lo siguiente:<br>
            1. Leer las 3 actividades que contiene cada grupo.<br>
            2. Elegir de entre las 3 actividades aquella con la que te identificas más.<br>
            Ojo, por favor no selecciones más de una opción por grupo.
        </p>
    </div>

    <form method="post" action="">
        <div class="button-container">
            <a class="button_slide" href="cuestionario_vak.php">Ir al formulario</a>
            <a class="back-button" href="test_menu.php">Regresar</a>
        </div>
    </form>
</body>
</html>
