<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Creada por [Los 0 kills]</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
             background: url('Imagenes/riberas23.jpg') no-repeat center center fixed;
            background-size: cover;
            
        }

        header {
            background-color: Green;
            padding: 10px;
            text-align: center;
            border-radius: 15px;
        }

        h1 {
            color: white;
            margin-bottom: 10px;
        }

        section {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            position: relative; /* Añadí esta propiedad para permitir la posición absoluta de la imagen */
        }

        /* Nueva regla para la imagen en la esquina superior derecha */
        .section-image {
            position: absolute;
            top: 30px;
            right: 30px;
            width: 140px; /* Ajusta el tamaño según tus necesidades */
            height: 140px; /* Ajusta el tamaño según tus necesidades */
            background-image: url('Imagenes/logo-uni.jpg'); /* Cambia 'ruta_de_la_imagen.jpg' por la ruta de tu imagen */
            background-size: cover;
            border-radius: 5px; /* Ajusta el borde según tus preferencias */
        }

        h2 {
            color: orange;
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }

        .back-link {
            display: block;
            text-align: right;
            margin-top: 20px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: green;
        }
        
        /* NI SE LES OCURRA TOCAR ESTAS 2 LINEAS DE CODIGO */
        img[src*="https://cdn.rawgit.com/000webhost/log"] { display: none; }
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }
        /* DE AQUI PARA ABAJO TOQUEN LO QUE NECESITEN MENOS LAS 2 LINEAS DE ARRIBA */
    </style>
</head>

<body>

    <header>
        <h1>Página Creada por:<br>
        Cesar Omar Rodarte Andrade<br>
        Manuel Ivan Silva Contreras<br>
        Leonardo Ortega Escobar<br>
        Juan Carlos Flores Sanchez</h1>
    </header>

    <section>
        <!-- Nueva clase para la imagen en la esquina superior derecha -->
        <div class="section-image"></div>
        <h2>Información del Creador</h2>
        <p>Página realizada por estudiantes de La Universidad Autónoma de Ciudad Juárez (UACJ) mientras realizaban su servicio social en el CECYTEC #23.</p>
        <p><strong>Información de contacto:</strong><br>
            al215430@alumnos.uacj.mx o cesarrodarte64@gmail.com<br>
            al214826@alumnos.uacj.mx o manuel.silva.contreras.21@gmail.com<br>
            al215579@alumnos.uacj.mx o leoortegaescobar@gmail.com<br>
            al214720@alumnos.uacj.mx o juancarlosflores656@gmail.com</p>
        <p><strong>Página Web:</strong> Página desarrollada únicamente por las personas antes mencionadas, en el periodo de Agosto-Diciembre 2023, con la finalidad de automatizar el proceso para la aplicación y el control de los exámenes para el departamento de Orientación Vacacional. </p>
        <div class="back-link">
            <a href="index.php" class="back-button">Volver Atrás</a>
        </div>
    </section>

    <footer>
        <p>&copy; 18/12/2023 Página Creada por [Los 0 kills]</p>
    </footer>
</body>

</html>
