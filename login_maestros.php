<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
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
      position: relative;
      font-size: 25px;
      height: 200px;
      background-color: rgba(164,172,172, 0.7);
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
  margin-left:;
  color:black;
 margin-left: calc(65% - 35%);
}

    .back-button {
      position:relative;
      top: 10px;
      left:-37%;
      font-size:1.3em;
      text-decoration: none;
      color: #333;
      display: inline-block;
      padding: 10px 20px;
      background-color: #25a85e;
      color: #fff;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

.back-button:hover {
  box-shadow: inset 0 100px 0 0 #2a9b54;
}

    .login-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      width: 700px;
      height: 540px;
      font-size: 1.5em;
      margin: auto; /* Centrar el contenedor de inicio de sesión */
      margin-top:5%;
    }

h1 {
      margin-bottom: 20px;
      margin-top: 10%;
      color: #25a85e;
    }

.login-form {
      display: flex;
      flex-direction: column;
      gap: 11px;
      position: relative;
      justify-content: space-around;
    }

input[name="correo"],
input[name="contra"] {
  font-size: 20px;
  font-weight: normal;
}

.login-button {
      background-color: #ff6600;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
      font-size:1.3em;
    }

.login-button:hover {
      background-color: #ff8000;
    }

.button-container {
      margin: 20px 0 0 20px;
    }
    
    input {
      border: none;
      border-bottom: 1px solid #25a85e;
      margin-top: 30px;
      padding: 5px;
      transition: border-bottom 0.3s;
      padding-top: 30px;
      font-size:1.3em;
      width: 90%;
    }

    input:focus + label {
      transform: translateY(-22px);
      left: 10px;
      font-size: 1.0em;
      background-color: #fff;
    }

    input:focus {
      border-bottom: 2px solid #ff6600;
    }
    
    label {
      position: absolute;
      pointer-events: none;
      font-size: 1.1em;
      color: #25a85e;
      transition: transform 0.3s ease, color 0.3s ease;
      
    }
    .usuariolabel
    {
        margin-bottom:230px;
    }
    .contralabel
    {
       margin-bottom:10px;
    }
    .contenedorpregunta {
      margin-bottom: 40px;
    }

    .login-button {
      width: 60%;
      margin-left: 20%;
      margin-bottom: 60px;
      border-radius: 25px;
    }
    

    @media (max-width: 1080px) {
      .login-container {
        height: 800px;
        width: 90%;
        font-size: 1.6em;
        margin-top:0;
      }
      h1 {
        margin-top: 15%;
      }
      
      .login-button 
      {
        width: 60%;
        margin-left: 25%;
      }
          h2
    {
        margin-left: calc(50% - 35%);
    }
    
    .barra-superior h2 {
                font-size: 1.4em;
                margin-left: 12%;
            }
.barra-superior img {
            max-height: 40%;
        }
        
        .back-button {
      left:-32%;
      font-size:1.2em;
      padding: 10px 20px;
      
    }
    }
    
    .mensaje-rojo {
        color: red;
        font-weight: bold;
        position: relative;
        width: 100%;
        text-align: center;
        z-index: 9999; /* Asegura que el mensaje esté en la capa superior */
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
    <p>Docente</p>
  </div>

  <div class="login-container">
    <a class="back-button" href="index.php">Regresar</a>
    <h1>Iniciar Sesión</h1>
    <?php
      // Verificar si hay un mensaje de error y mostrarlo
      if (isset($_SESSION['profesor_error'])) {
        echo '<div class="mensaje-rojo">' . $_SESSION['profesor_error']. '</div>';
        unset($_SESSION['profesor_error']); // Asegúrate de eliminar la variable de sesión después de mostrar el mensaje si ya no la necesitas
      }
    ?>
    <form class="login-form" action="maestros.php" method="POST">
      <input type="text" name="correo"  required>
      <label class="usuariolabel" for="user">Usuario</label>
      
    <div></div>
      <input type="password" name="contra"  required>
      <label class="contralabel"for="user">Contraseña</label>
      <button class="login-button" type="submit">Enviar</button>
    </form>
  </div>
</body>
</html>