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
    <title>Registro</title>
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
     /* Ajustado para reducir el espacio entre la imagen y el texto */
  }

  .barra-superior p {
    font-size: 2em;
    color: black; /* Texto blanco */
    margin-left: 30%;
  }
.back-button {
    position: relative;
    top: 7%; /* Ajusta según sea necesario para el espacio deseado */
    left: -40%;
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
  
  .container {
           
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 0px 10px #2a9b54;
    padding: 50px;
    font-size: 30px;
    text-align: center;
    width: 600px;
    margin: auto; /* Centrar el contenedor de inicio de sesión */
  }

        h2 {
    margin-bottom: 40px;
    margin-top: 3px;
    
  }

        .form-group {
            margin-bottom: 20px;
            
        }

        label {
            display: block;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        select {
            width: 98%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
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
    transition: background-color 0.3s; /* Agregado el estilo de transición */
  }

  .login-button:hover {
    background-color: #2a9b54;
  }

  .button-container {
    margin: 15px 0 0 15px;
    font-size: 20px;
  }
        
        .container
        {
            width:50%;
        }
        
        label
        {
            font-size: 1.4em;
        }
        input
        {
            font-size: 1.2em;
        }
        
        @media (max-width: 1080px)
        {
           .container
        {
            width:100%;
            padding-left:4px;
            padding-right:4px;
        } 
        .barra-superior p {
    font-size: 2em;
    margin-left: 10%;
  }
        
        .back-button {
    top: 5%; /* Ajusta según sea necesario para el espacio deseado */
    left: -35%;
        }
        }
    /* NI SE LES OCURRA TOCAR ESTAS 2 LINEAS DE CODIGO */
        img[src*="https://cdn.rawgit.com/000webhost/log"] { display: none; }
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }
    /* DE AQUI PARA ABAJO TOQUEN LO QUE NECESITEN MENOS LAS 2 LINEAS DE ARRIBA */
    </style>
    
</head>
<body>  <div class="barra-superior">
    <img src="Imagenes/LogoC.png" alt="Logo" />
    <p>DOCENTES</p>
    
  </div>

    <div class="container">
        <a href="maestros_menu.php" class="back-button" >Volver</a>
        <h2>Registrar Docente</h2>
            <?php
    if (isset($_SESSION['registro_mensaje']))
    {
        echo $_SESSION['registro_mensaje'];
        unset($_SESSION['registro_mensaje']); // Asegúrate de eliminar la variable de sesión después de mostrar el mensaje si ya no la necesitas
    }
    
    ?>
        <form action="procesar_registro_maestro.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="instituto">Instituto:</label>
                <select id="instituto" name="instituto" required>
                    <option value="" selected></option>
                    <option value="Cecyt 23">Cecytec 23</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="ocupacion">Ocupacion:</label>
                <select id="oupacion" name="ocupacion" required>
                    <option value="" selected></option>
                    <option value="Admin">Admin</option>
                    <option value="Docente">Docente</option>
                </select>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button class="login-button" type:"submit">Enviar</button>
        </form>
    </div>
</body>
</html>
