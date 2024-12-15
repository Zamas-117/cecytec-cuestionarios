<!DOCTYPE html>
<html>
<head>
    <title>Cuestionario</title>
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

     /* Fondo blanco para el cuestionario y preguntas */
    form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 600px;
        margin-top: 20px;
    }

    form h2,
    form p {
        background-color: white;
        margin: 0;
        padding: 10px;
    }

    form p {
        margin-top: 15px;
        margin-bottom: 5px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
    }
    
   .back-button {
      position:relative;
      margin: 10px;
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
      background-color: orange;}
      
       .send-button {
      position:relative;
      margin: 10px;
      margin-left: 320px;
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

    .send-button:hover {
      background-color: orange;
    }
    }
</style>


<body>
      <div class="barra-superior">
    <img src="Imagenes/LogoC.png" alt="Logo" />
    <p>Responde</p>
  </div>
    <form action="procesar_cuestionario_vak.php" method="post">
        <h2>Cuestionario</h2>
        
          <p>Grupo A</p>
          <p>1. Al estudiar, oigo las palabras en mi cabeza o leo en voz alta.</p>
          <input type="radio" id="auditivo_1" name="opcion_A" value="auditivo_1" required>
          <label for="auditivo_1">Opción 1</label>

          <p>2. Al estudiar veo gráficas en mi cabeza o es lo que mejor se me queda.</p>
          <input type="radio" id="visual_1" name="opcion_A" value="visual_1" required>
          <label for="visual_1">Opción 2</label>

          <p>3. Al estudiar tengo que estar haciendo algo para que se me quede.</p>
          <input type="radio" id="kinestesico_1" name="opcion_A" value="kinestesico_1" required>
          <label for="kinestesico_1">Opción 3</label>

         <br><br> <p>Grupo B</p>
          <p>1. Prefiero que me regalen un rompecabezas.</p>
          <input type="radio" id="kinestesico_2" name="opcion_B" value="kinestesico_2" required>
          <label for="kinestesico_2">Opción 1</label>

          <p>2. Prefiero que me regalen música.</p>
          <input type="radio" id="auditivo_2" name="opcion_B" value="auditivo_2" required>
          <label for="auditivo_2">Opción 2</label>

          <p>3. Prefiero que me regalen un libro.</p>
          <input type="radio" id="visual_2" name="opcion_B" value="visual_2" required>
          <label for="visual_2">Opción 3</label>
          
         <br><br> <p>Grupo C</p>
          <p>1.  Prefiero ver una película.</p>
          <input type="radio" id="visual_3" name="opcion_C" value="visual_3" required>
          <label for="visual_3">Opción 1</label>

          <p>2.  Prefiero recostarme en mi cama.</p>
          <input type="radio" id="kinestesico_3" name="opcion_C" value="kinestesico_3" required>
          <label for="kinestesico_3">Opción 2</label>

          <p>3.  Prefiero escuchar música.</p>
          <input type="radio" id="auditivo_3" name="opcion_C" value="auditivo_3" required>
          <label for="auditivo_3">Opción 3</label>
          
         <br><br> <p>Grupo D</p>
          <p>1.  Recuerdo mejor si estudio en voz alta con alguien.</p>
          <input type="radio" id="auditivo_4" name="opcion_D" value="auditivo_4" required>
          <label for="auditivo_4">Opción 1</label>

          <p>2.  Puedo recordar algo mejor si lo veo escrito.</p>
          <input type="radio" id="visual_4" name="opcion_D" value="visual_4" required>
          <label for="visual_4">Opción 2</label>

          <p>3.  Prefiero simplemente comenzar a hacer las cosas a esperar instrucciones.</p>
          <input type="radio" id="kinestesico_4" name="opcion_D" value="kinestesico_4" required>
          <label for="kinestesico_4">Opción 3</label>
          
          <br><br><p>Grupo E</p>
          <p>1.  Necesito ver a la persona de frente para que me entienda lo que necesito.</p>
          <input type="radio" id="visual_5" name="opcion_E" value="visual_5" required>
          <label for="visual_5">Opción 1</label>

          <p>2.  Puedo seguir fácilmente a una persona que está hablando aunque mi cabeza esté hacia abajo o me encuentre mirando por una ventana.</p>
          <input type="radio" id="auditivo_5" name="opcion_E" value="auditivo_5" required>
          <label for="auditivo_5">Opción 2</label>

          <p>3.  Soy incapaz de permanecer en paz cuando estoy contando algo.</p>
          <input type="radio" id="kinestesico_5" name="opcion_E" value="kinestesico_5" required>
          <label for="kinestesico_5">Opción 3</label>
          
          <br><br><p>Grupo F</p>
          <p>1.  Recuerdo mejor a la gente por su forma de vestir.</p>
          <input type="radio" id="visual_6" name="opcion_F" value="visual_6" required>
          <label for="visual_6">Opción 1</label>

          <p>2.  Recuerdo mejor a la gente por su forma de saludar con la mano.</p>
          <input type="radio" id="kinestesico_6" name="opcion_F" value="kinestesico_6" required>
          <label for="kinestesico_6">Opción 2</label>

          <p>3.  Recuerdo mejor lo que la gente dice que su aspecto.</p>
          <input type="radio" id="auditivo_6" name="opcion_F" value="auditivo_5" required>
          <label for="auditivo_5">Opción 3</label>
          
          <br><br><p>Grupo G</p>
          <p>1.  Me resulta útil decir en voz alta las tareas que tengo para hacer.</p>
          <input type="radio" id="auditivo_7" name="opcion_G" value="auditivo_7" required>
          <label for="auditivo_7">Opción 1</label>

          <p>2.  Me ayuda mirar a la persona que habla, me mantiene enfocado.</p>
          <input type="radio" id="visual_7" name="opcion_G" value="visual_7" required>
          <label for="visual_7">Opción 2</label>

          <p>3.  Prefiero hacer un proyecto que estudiar leyendo.</p>
          <input type="radio" id="kinestesico_7" name="opcion_G" value="kinestesico_7" required>
          <label for="kinestesico_7">Opción 3</label>
          
          <br><br><p>Grupo H</p>
          <p>1.  Necesito recesos frecuentes cuando estudio.</p>
          <input type="radio" id="kinestesico_8" name="opcion_H" value="kinestesico_8" required>
          <label for="kinestesico_8">Opción 1</label>

          <p>2.  Para aprender prefiero escuchar la información antes que leerla.</p>
          <input type="radio" id="auditivo_8" name="opcion_H" value="auditivo_8" required>
          <label for="auditivo_8">Opción 2</label>

          <p>3.  Me resulta fácil entender y aprender mapas, tablas y gráficos.</p>
          <input type="radio" id="visual_8" name="opcion_H" value="visual_8" required>
          <label for="visual_8">Opción 3</label>
          
          <br><br><p>Grupo I</p>
          <p>1.  Pienso mejor cuando tengo la libertad de moverme.</p>
          <input type="radio" id="kinestesico_9" name="opcion_I" value="kinestesico_9" required>
          <label for="kinestesico_9">Opción 1</label>

          <p>2.  Prefiero ver un documental en clase o un video sobre el tema.</p>
          <input type="radio" id="visual_9" name="opcion_I" value="visual_9" required>
          <label for="visual_9">Opción 2</label>

          <p>3.  Prefiero en clases que se organicen debates y haya diálogo.</p>
          <input type="radio" id="auditivo_9" name="opcion_I" value="auditivo_9" required>
          <label for="auditivo_9">Opción 3</label>
          
         <br><br> <p>Grupo J</p>
          <p>1.  Cuando estoy en clase me distraen los ruidos.</p>
          <input type="radio" id="auditivo_10" name="opcion_J" value="auditivo_10" required>
          <label for="auditivo_10">Opción 1</label>

          <p>2.  Cuando estoy en clase me distrae el movimiento.</p>
          <input type="radio" id="visual_10" name="opcion_J" value="visual_10" required>
          <label for="visual_10">Opción 2</label>

          <p>3.  Cuando estoy en clase me distraen las explicaciones demasiado largas.</p>
          <input type="radio" id="kinestesico_10" name="opcion_J" value="kinestesico_10" required>
          <label for="10">Opción 3</label>

        
        
        
        <br><br>
        <a href="instrucciones_VAK.php" class="back-button" >Volver Atrás</a>
        <input class="send-button" type="submit" value="Enviar">
    </form>
</body>
</html>
