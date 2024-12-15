<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro de Alumnos</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 80vh;
            background: url('Imagenes/riberas23.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .barra-superior {
            position: relative;
            width: 100%;
            font-size: 25px;
            height: 200px; /* Mantiene la altura original de la barra superior */
            background-color: rgba(164,172,172, 0.7);
            color: #fff;
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
            color: black; /* Texto blanco */
            margin-left:10%;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 15px;
            color: #25a85e;
            margin: 16px;
            font-size: 22px;
             letter-spacing: 1px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #25a85e;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .button-container {
            margin-right: 85%;
            left: 100%;
        }

        .back-button {
            position: relative;
            top: 20px; /* Ajusta según sea necesario para el espacio deseado */
            left: -6%;
            text-decoration: none;
            color: black; /* Cambiado a negro según tu estilo */
            background-color: orange; /* Agregado el color de fondo */
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

        .grupo-container {
            display: flex;
            gap: 10px;
        }

        .grupo-label {
            flex: 1;
        }

        form {
            position:relative;
            background-color: #fff;
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-button {
            background-color: orange;
            color: black;
            width: 98%;
            border: none;
            box-shadow: inset 0 0 0 0 white;
            font-size: 20px;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #2a9b54;
        }
    
    
        @media (max-width: 1080px) {
            .formulario {
                width: 96%;
                margin: 0px auto; /* Centra el formulario */
                font-size: 4em; /* Ajusta el tamaño de la fuente */
                padding: 20px; /* Ajusta el espaciado interno */
            }

            h2 {
                margin-bottom: 40px;
                margin-top: 3px;
            }
            label
            {
               font-size: 1.1em; 
            }

            input[type="text"],
            select {
                width: 100%;
                /* Ajusta el ancho de los campos de entrada y selec */
                height:100px;
                font-size: 1.0em;
                padding: 10px; /* Ajusta el espaciado interno de los campos de entrada y select */
            }

            .login-button {
                width: 98%;
            }

            .button-container {
                margin: 15px 0 0 15px;
                font-size: 20px;
            }
            
            .back-button {
            left: -1%;
            top: 30px;
            font-size:1.5em;
            }
               .barra-superior p {
                font-size: 1.4em;
                margin-left: 12%;
            }
        .barra-superior img {
            max-height: 40%;
        }
        }
        
        
    /* NI SE LES OCURRA TOCAR ESTAS 2 LINEAS DE CODIGO */
        img[src*="https://cdn.rawgit.com/000webhost/log"] { display: none; }
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }
    /* DE AQUI PARA ABAJO TOQUEN LO QUE NECESITEN MENOS LAS 2 LINEAS DE ARRIBA */
    </style>
</head>
<body>
    <div class="barra-superior">
        <img src="Imagenes/LogoC.png" alt="Logo" />
        <p>Formulario de registro para alumnos</p>
    </div>

    <form action="registro_alumno.php" method="post" class="formulario">
        <div class="button-container">
            <a class="back-button" href="login_alumnos.php">Regresar</a>
        </div><br>
        <label for="nombre" style="margin-top:40px">Nombre completo:</label>
<input type="text" id="nombre" name="nombre_alumno" required oninput="validarNombre(this)" placeholder="Nombre(s) y Apellidos" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{10,119}">
<span id="nombreError" style="color: red;"></span>


        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="">Seleccione una opción</option>
            <option id="sexoM" name="sexo" value="M" required>Mujer</option>
            <option id="sexoH" name="sexo" value="H" required>Hombre</option>
        </select>

        <label for="grupo">Grupo:</label>
         <select id="grupo" name="grupo" required>
                <option value="">Seleccione una opción</option>
                <option value="101 E" required>101 E</option>
                <option value="102 E" required>102 E</option>
                <option value="103 E" required>103 E</option>
                <option value="101 SI" required>101 SI</option>
                <option value="102 SI" required>102 SI</option>
                <option value="103 SI" required>103 SI</option>
                <option value="111 E" required>111 E</option>
                <option value="112 E" required>112 E</option>
                <option value="113 E" required>113 E</option>
                <option value="114 E" required>114 E</option>
                <option value="111 SI" required>111 SI</option>
                <option value="112 SI" required>112 SI</option>
                <option value="113 SI" required>113 SI</option>
                <option value="114 SI" required>114 SI</option>
            </select>

        <button class="login-button" type="submit">Enviar</button>
    </form>

    <script>
        function validarNombre(input) {
            input.value = input.value.toUpperCase();

            var nombreError = document.getElementById("nombreError");
            if (input.validity.patternMismatch) {
                nombreError.textContent = "Completa de manera correcta este campo.";
            } else {
                nombreError.textContent = "";
            }
        }
    </script>
</body>
</html>
