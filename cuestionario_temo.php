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
    <form action="procesar_cuestionario_temo.php" method="post">
        <!--
            Cantidad de preguntas para 
            MS tiene 8 preguntas,
            MP tiene 9 preguntas,
            MR tiene 7 preguntas.
        -->
             <h2>Seccion 1</h2>
             <div>
            <label for="MS_1">1. Me desanimo fácilmente cuando obtengo una mala calificación</label>
        <select id="MS_1" name="MS_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select><br>
            </div>
            
              <div>
            <br><br><label for="MP_1">2. Me satisface estudiar porque siempre descubro algo nuevo</label>
        <select id="MP_1" name="MP_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MR_1">3. Pienso que siempre es importante obtener buenas calificaciones</label>
        <select id="MR_1" name="MR_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MS_2">4. Reconozco que estudio para aprobar</label>
        <select id="MS_2" name="MS_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MP_2">5. Me gusta aprender cosas nuevas para profundizar después en ellas</label>
        <select id="MP_2" name="MP_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MS_3">6. Es muy importante para mi que los profesores (as) señalen exactamente lo que debemos hacer</label>
        <select id="MS_3" name="MS_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
        
        <div>
       <br> <label for="MP_3">7. Estudio a fondo los temas que me resultan interesantes. </label>
        <select id="MP_3" name="MP_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MS_4">8. Me esfuerzo en el estudio porque mi familia me suele hacer regalos </label>
        <select id="MS_4" name="MS_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MS_5">9. A la hora de hacer los exámenes tengo miedo de reprobar.</label>
        <select id="MS_5" name="MS_5" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MP_4">10. Pienso que estudiar te ayuda a comprender mejor la vida y la sociedad.</label>
        <select id="MP_4" name="MP_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            
            <div>
           <br> <label for="MR_2">11.Me gusta competir para obtener mejores calificaciones </label>
        <select id="MR_2" name="MR_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MR_3">12. Creo que estudiar facilita un mejor trabajo en el futuro </label>
        <select id="MR_3" name="MR_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MP_5">13. Cuando estudio aporto mi punto de vista o conocimientos previos  </label>
        <select id="MP_5" name="MP_5" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MR_4">14. Lo importante para mi es conseguir buenas notas en todas las materias </label>
        <select id="MR_4" name="MR_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MS_6">15. Cuando hago los exámenes pienso que me van a salir peor que a mis compañeros/as</label>
        <select id="MS_6" name="MS_6" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MP_6">16. Cuando profundizo en el estudio luego sé que puedo aplicar en la práctica lo que voy aprendiendo </label>
        <select id="MP_6" name="MP_6" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MR_5">17. Si puedo intentaré sacar mejores notas que la mayoría de los compañeros(as)</label>
        <select id="MR_5" name="MR_5" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
             <div>
            <br><label for="MS_7">18. Lo que quiero es estudiar solamente lo que me van a preguntar en los exámenes </label>
        <select id="MS_7" name="MS_7" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MP_7">19. Prefiero estudiar los temas que me resultan interesantes aunque sean difìciles </label>
        <select id="MP_7" name="MP_7" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
             <div>
            <br><label for="MR_6">20. Creo que soy un buen alumno/a </label>
        <select id="MR_6" name="MR_6" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MR_7">21. Mi fracaso en los exámenes se debe en gran parte a la mala suerte</label>
        <select id="MR_7" name="MR_7" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MP_8">22. Tengo buenas cualidades para estudiar</label>
        <select id="MP_8" name="MP_8" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MS_8">23. Me considero un alumno del montón </label>
        <select id="MS_8" name="MS_8" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
             <div>
            <br><label for="MP_9">24. Busco la forma de aprender lo que me propongo, distintas técnicas </label>
        <select id="MP_9" name="MP_9" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            
            
        <br><br>
            
            <h2>Seccion 2</h2>
             <div>
           <br> <label for="MRM_1">1. Me esfuerzo en mis estudios porque mi padre/madre se sienten orgullosos de mi</label>
        <select id="MRM_1" name="MRM_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
              <div>
          <br>  <label for="EATM_1">2. Siempre que estudio lo suficiente, obtengo buenas notas</label>
        <select id="EATM_1" name="EATM_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="BCAE_1">3. Cuando el profesorado se preocupa y da directrices de como estudiar, entonces me encuentro bien en clase y exámenes </label>
        <select id="BCAE_1" name="BCAE_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="EATM_2">4. Mis buenas notas se deben siempre a mi capacidad</label>
        <select id="EATM_2" name="EATM_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="SBRA_1">5. Mi éxito en los exámenes se debe en gran parte a la suerte</label>
        <select id="SBRA_1" name="SBRA_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="EATM_3">6. Las materias que estudio, en general, son fáciles, por eso obtengo buenas notas </label>
        <select id="EATM_3" name="EATM_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
        
        <div>
        <br><label for="MRM_2">7. Me esfuerzo en mis estudios porque deseo aumentar mis conocimientos y mi competencia profesional futura </label>
        <select id="MRM_2" name="MRM_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MRM_3">8. Normalmente me esfuerzo en mis estudios porque quiero ser valorados por mis amigos/as y compañeros/as de clase  </label>
        <select id="MRM_3" name="MRM_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MRM_4">9. Estudio desde el principio y lo hago todos los días asì nunca tengo problemas para obtener buenas notas </label>
        <select id="MRM_4" name="MRM_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="EATM_4">10. El profesorado es responsable de mi bajo rendimiento académico </label>
        <select id="EATM_4" name="EATM_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            
            <div>
            <br><label for="BCAE_2">11. Cuando fracaso en los exámenes se debe a mi baja capacidad </label>
        <select id="BCAE_2" name="BCAE_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="SBRA_2">12. Si obtengo malas notas es porque tengo mala suerte </label>
        <select id="SBRA_2" name="SBRA_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="EATM_5">13. Es fácil para mi comprender los contenidos de las materias que tengo que estudiar para obtener buenas notas   </label>
        <select id="EATM_5" name="EATM_5" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MRM_5">14. Me esfuerzo en mis estudios porque me gusta lo que estoy trabajando en clase </label>
        <select id="MRM_5" name="MRM_5" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MRM_6">15. Me esfuerzo en mis estudios porque quiero obtener las mejores notas en clase</label>
        <select id="MRM_6" name="MRM_6" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="MRM_7">16. Estudio para obtener buenas notas porque es la mejor manera de sobresalir en clase </label>
        <select id="MRM_7" name="MRM_7" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="EATM_6">17. Cuando el profesorado explica bien, me ayuda a obtener buenas notas </label>
        <select id="EATM_6" name="EATM_6" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
             <div>
            <br><label for="BCAE_3">18. Cuando obtengo malas notas pienso que no estoy capacitado/a para triunfar en esas materias </label>
        <select id="BCAE_3" name="BCAE_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="SBRA_3">19. A veces mis malas notas me hacen pensar que tengo mala suerte en la vida y especialmente en los exámenes  </label>
        <select id="SBRA_3" name="SBRA_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
             <div>
            <br><label for="FM_1">20. Mis buenas notas reflejan que algunas de las materias que tengo son fáciles  </label>
        <select id="FM_1" name="FM_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="MRM_8">21. Me esfuerzo en mis estudios porque me resulta muy útil ver como lo que sé, me sirve para aprender cosas nuevas </label>
        <select id="MRM_8" name="MRM_8" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="BCAE_4">22. Cuando tengo malas notas es porque no estudié lo suficiente</label>
        <select id="BCAE_4" name="BCAE_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
           <br> <label for="SBRA_4">23. Mi fracaso en exámenes se debe en parte a la mala suerte </label>
        <select id="SBRA_4" name="SBRA_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
             <div>
           <br> <label for="FM_2">24. Mis malas notas reflejan que las materias son difìciles  </label>
        <select id="FM_2" name="FM_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <div>
            <br><label for="FM_3">25. Considero que ciertas materias son más fáciles que otras  </label>
        <select id="FM_3" name="FM_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
             <div>
            <br><label for="FM_4">26. Hay materias que me gusta repasar porque se me simplifica entenderlas   </label>
        <select id="FM_4" name="FM_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Totalmente desacuerdo</option>
            <option value="2" required>Medianamente en desacuerdo</option>
            <option value="3" required>Ligeramente desacuerdo</option>
            <option value="4" required>Ni en acuerdo,ni en desacuerdo</option>
            <option value="5" required>Ligeramente acuerdo</option>
            <option value="6" required>Medianamente de acuerdo</option>
            <option value="7" required>Totalmente de acuerdo</option>
        </select>
            </div>
            
            <br><br>
            <!----------------------------------SECCION 3------------------------------------>
            <h2>Seccion 3</h2>
            <h3>Indicación: Responder FALSO o VERDADERO  según te identifiques. Escribir tal cual la palabra, y en mayusculas. </h3>
             <div>
       <br> <label for="pts_1">1. Mi promedio de la secundaria es de igual o mayor a 7</label>
        <select id="pts_1" name="pts_1" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
       <br><label for="pts_2">2. Reprobé dos o más materias en la secundaria </label>
        <select id="pts_2" name="pts_2" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_3">3. Yo elegì el plantel de bachillerato al que asisto </label>
        <select id="pts_3" name="pts_3" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_4">4. Asisto a la educación media superior (prepa) porque considero que me será útil </label>
        <select id="pts_4" name="pts_4" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_5">5. Me gusta la escuela </label>
        <select id="pts_5" name="pts_5" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_6">6. Soy bueno para estudiar</label>
        <select id="pts_6" name="pts_6" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_7">7. En la secundaría sentìa confianza con algún maestro(a) como para platicar con él (ella)</label>
        <select id="pts_7" name="pts_7" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
       <br> <label for="pts_8">8. En la secundaria preguntaba mis dudas al maestro(a) </label>
        <select id="pts_8" name="pts_8" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_9">9. En la secundaria me molestaban con frecuencia otro u otros compañeros (as) </label>
        <select id="pts_9" name="pts_9" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_10">10. Si yo reprobara alguna materia, se lo platicaría a mi mamá o a mi papá</label>
        <select id="pts_10" name="pts_10" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_11">11. Si tuviera un problema personal, se lo platicarìa a mi mamá o a mi papá</label>
        <select id="pts_11" name="pts_11" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_12">12. Me gustaría emigrar a Estados Unidos en los próximos 5 años </label>
        <select id="pts_12" name="pts_12" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_13">13. Es posible que me case o viva con mi pareja, antes de terminar el bachillerato </label>
        <select id="pts_13" name="pts_13" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_14">14. En mi casa hemos tenido problemas económicos serios (deudas, no alcanza para los gastos del diario)</label>
        <select id="pts_14" name="pts_14" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
            
            <div>
        <br><label for="pts_15">15. Es más importante trabajar que estudiar. </label>
        <select id="pts_15" name="pts_15" required>
            <option value="">Seleccione una opción</option>
            <option value="1" required>Vedadero</option>
            <option value="0" required>Falso</option>
        </select>
            </div>
        <br><br>
        <a href="instrucciones_VAK.php" class="back-button" >Volver Atrás</a>
        <input class="send-button" type="submit" value="Enviar">
    </form>
</body>
</html>
