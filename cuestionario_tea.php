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
    <form action="procesar_cuestionario.php" method="post">
        <h2>Cuestionario</h2>
        
        <p>Me gusta pensar en las cosas antes de tomar una decisión.</p>
        <label for="reflexivo_1_si">Sí</label>
        <input type="radio" name="reflexivo_1" value="si" required>
        <label for="reflexivo_1_no">No</label>
        <input type="radio" name="reflexivo_1" value="no"required>
        
        <p>Digo las cosas como son, aunque suene grosero.</p>
        <label for="practico_1_si">Sí</label>
        <input type="radio" name="practico_1" value="si" required>
        <label for="practico_1_no">No</label>
        <input type="radio" name="practico_1" value="no" required>
        
        <p>Quiero saber el porqué de las cosas.</p>
        <label for="organizado_1_si">Sí</label>
        <input type="radio" name="organizado_1" value="si" required>
        <label for="organizado_1_no">No</label>
        <input type="radio" name="organizado_1" value="no" required>
        
        <p>En clase, desearía que dieran las instrucciones rápido para comenzar a trabajar.</p>
        <label for="activo_1_si">Sí</label>
        <input type="radio" name="activo_1" value="si" required>
        <label for="activo_1_no">No</label>
        <input type="radio" name="activo_1" value="no" required>
        
        <p>Si estoy tranquilo en clase, aprendo mejor.</p>
        <label for="reflexivo_2_si">Sí</label>
        <input type="radio" name="reflexivo_2" value="si" required>
        <label for="reflexivo_2_no">No</label>
        <input type="radio" name="reflexivo_2" value="no" required>
        
        <p>Soy más del tipo práctico.</p>
        <label for="practico_2_si">Sí</label>
        <input type="radio" name="practico_2" value="si" required>
        <label for="practico_2_no">No</label>
        <input type="radio" name="practico_2" value="no" required>
        
        <p>Tiendo a ser perfeccionista.</p>
        <label for="organizado_2_si">Sí</label>
        <input type="radio" name="organizado_2" value="si" required>
        <label for="organizado_2_no">No</label>
        <input type="radio" name="organizado_2" value="no" required>
    
        <p>Soy más del tipo que actúa para que se den las cosas.</p>
        <label for="activo_2_si">Sí</label>
        <input type="radio" name="activo_2" value="si" required>
        <label for="activo_2_no">No</label>
        <input type="radio" name="activo_2" value="no" required>
        
        <p>Soy de los que analizan las cosas.</p>
        <label for="reflexivo_3_si">Sí</label>
        <input type="radio" name="reflexivo_3" value="si" required>
        <label for="reflexivo_3_no">No</label>
        <input type="radio" name="reflexivo_3" value="no" required>
        
        <p>Tiendo a simplificar las cosas.</p>
        <label for="practico_3_si">Sí</label>
        <input type="radio" name="practico_3" value="si" required>
        <label for="practico_3_no">No</label>
        <input type="radio" name="practico_3" value="no" required>
        
        <p>Me desagrada el desorden.</p>
        <label for="organizado_3_si">Sí</label>
        <input type="radio" name="organizado_3" value="si" required>
        <label for="organizado_3_no">No</label>
        <input type="radio" name="organizado_3" value="no" required>
    
        <p>Me gusta ser el que tiene la iniciativa para realizar las cosas.</p>
        <label for="activo_3_si">Sí</label>
        <input type="radio" name="activo_3" value="si" required>
        <label for="activo_3_no">No</label>
        <input type="radio" name="activo_3" value="no" required>
        
        <p>Prefiero hacer planes a largo plazo.</p>
        <label for="reflexivo_4_si">Sí</label>
        <input type="radio" name="reflexivo_4" value="si" required>
        <label for="reflexivo_4_no">No</label>
        <input type="radio" name="reflexivo_4" value="no" required>
        
        <p>A veces me brinco pasos que considero innecesarios.</p>
        <label for="practico_4_si">Sí</label>
        <input type="radio" name="practico_4" value="si" required>
        <label for="practico_4_no">No</label>
        <input type="radio" name="practico_4" value="no" required>
        
        <p>Sigo las instrucciones al pie de la letra.</p>
        <label for="organizado_4_si">Sí</label>
        <input type="radio" name="organizado_4" value="si" required>
        <label for="organizado_4_no">No</label>
        <input type="radio" name="organizado_4" value="no" required>
    
        <p>Prefiero tomar una decisión antes de pensarlo, pues podría arrepentirme.</p>
        <label for="activo_4_si">Sí</label>
        <input type="radio" name="activo_4" value="si" required>
        <label for="activo_4_no">No</label>
        <input type="radio" name="activo_4" value="no" required>
        
        <p>Soy más del tipo que observa cómo se dan las cosas.</p>
        <label for="reflexivo_5_si">Sí</label>
        <input type="radio" name="reflexivo_5" value="si" required>
        <label for="reflexivo_5_no">No</label>
        <input type="radio" name="reflexivo_5" value="no" required>
        
        <p>Prefiero facilitarme las cosas evitando algún procedimiento.</p>
        <label for="practico_5_si">Sí</label>
        <input type="radio" name="practico_5" value="si" required>
        <label for="practico_5_no">No</label>
        <input type="radio" name="practico_5" value="no" required>
        
        <p>Me gusta revisar el orden de las cosas para saber que están bien hechas.</p>
        <label for="organizado_5_si">Sí</label>
        <input type="radio" name="organizado_5" value="si" required>
        <label for="organizado_5_no">No</label>
        <input type="radio" name="organizado_5" value="no" required>
    
        <p>En cuanto termino un trabajo, deseo entregarlo; no es necesario revisarlo de último.</p>
        <label for="activo_5_si">Sí</label>
        <input type="radio" name="activo_5" value="si" required>
        <label for="activo_5_no">No</label>
        <input type="radio" name="activo_5" value="no" required>
        
        <p>Antes de entregar un trabajo, lo reviso para asegurarme de que está bien.</p>
        <label for="reflexivo_6_si">Sí</label>
        <input type="radio" name="reflexivo_6" value="si" required>
        <label for="reflexivo_6_no">No</label>
        <input type="radio" name="reflexivo_6" value="no" required>
        
        <p>No considero necesario adornar las cosas, con que funcionen.</p>
        <label for="practico_6_si">Sí</label>
        <input type="radio" name="practico_6" value="si" required>
        <label for="practico_6_no">No</label>
        <input type="radio" name="practico_6" value="no" required>
        
        <p>Siempre observo las cosas con objetividad.</p>
        <label for="organizado_6_si">Sí</label>
        <input type="radio" name="organizado_6" value="si" required>
        <label for="organizado_6_no">No</label>
        <input type="radio" name="organizado_6" value="no" required>
    
        <p>Entre más pronto digan las cosas, más pronto las podré poner en práctica.</p>
        <label for="activo_6_si">Sí</label>
        <input type="radio" name="activo_6" value="si" required>
        <label for="activo_6_no">No</label>
        <input type="radio" name="activo_6" value="no" required>
        
        <p>No quiero que me estén apresurando para terminar las cosas.</p>
        <label for="reflexivo_7_si">Sí</label>
        <input type="radio" name="reflexivo_7" value="si" required>
        <label for="reflexivo_7_no">No</label>
        <input type="radio" name="reflexivo_7" value="no" required>
        
        <p>Me molestan las explicaciones innecesarias, deseo ir al grano.</p>
        <label for="practico_7_si">Sí</label>
        <input type="radio" name="practico_7" value="si" required>
        <label for="practico_7_no">No</label>
        <input type="radio" name="practico_7" value="no" required>
        
        <p>Me siento incómodo cuando las cosas se hacen sin un orden.</p>
        <label for="organizado_7_si">Sí</label>
        <input type="radio" name="organizado_7" value="si" required>
        <label for="organizado_7_no">No</label>
        <input type="radio" name="organizado_7" value="no" required>
    
        <p>Procuro siempre tener cosas que hacer.</p>
        <label for="activo_7_si">Sí</label>
        <input type="radio" name="activo_7" value="si" required>
        <label for="activo_7_no">No</label>
        <input type="radio" name="activo_7" value="no" required>
        
        <p>Me gusta planificar antes de hacer las cosas.</p>
        <label for="reflexivo_8_si">Sí</label>
        <input type="radio" name="reflexivo_8" value="si" required>
        <label for="reflexivo_8_no">No</label>
        <input type="radio" name="reflexivo_8" value="no" required>
        
        <p>No me gusta darle vueltas al asunto.</p>
        <label for="practico_8_si">Sí</label>
        <input type="radio" name="practico_8" value="si" required>
        <label for="practico_8_no">No</label>
        <input type="radio" name="practico_8" value="no" required>
        
        <p>No me agrada tener que romper las reglas.</p>
        <label for="organizado_8_si">Sí</label>
        <input type="radio" name="organizado_8" value="si" required>
        <label for="organizado_8_no">No</label>
        <input type="radio" name="organizado_8" value="no" required>
    
        <p>Definitivamente soy de los que actúan.</p>
        <label for="activo_8_si">Sí</label>
        <input type="radio" name="activo_8" value="si" required>
        <label for="activo_8_no">No</label>
        <input type="radio" name="activo_8" value="no" required>
        
         <p>Prefiero instrucciones tranquilas para poder pensar cómo hacer las cosas.</p>
        <label for="reflexivo_9_si">Sí</label>
        <input type="radio" name="reflexivo_9" value="si" required>
        <label for="reflexivo_9_no">No</label>
        <input type="radio" name="reflexivo_9" value="no" required>
        
        <p>Soy directo en lo que digo y hago.</p> 
        <label for="practico_9_si">Sí</label>
        <input type="radio" name="practico_9" value="si" required>
        <label for="practico_9_no">No</label>
        <input type="radio" name="practico_9" value="no" required>
        
        <p>Realizo las cosas por lógica.</p>
        <label for="organizado_9_si">Sí</label>
        <input type="radio" name="organizado_9" value="si" required>
        <label for="organizado_9_no">No</label>
        <input type="radio" name="organizado_9" value="no" required>
    
        <p>Actúo, luego pienso.</p>
        <label for="activo_9_si">Sí</label>
        <input type="radio" name="activo_9" value="si" required>
        <label for="activo_9_no">No</label>
        <input type="radio" name="activo_9" value="no" required>
        
        <p>No deseo apresurar las cosas.</p>
        <label for="reflexivo_10_si">Sí</label>
        <input type="radio" name="reflexivo_10" value="si" required>
        <label for="reflexivo_10_no">No</label>
        <input type="radio" name="reflexivo_10" value="no" required>
        
        <p>Tiendo a descubrir que hay formas mejores de realizar las cosas.</p>
        <label for="practico_10_si">Sí</label>
        <input type="radio" name="practico_10" value="si" required>
        <label for="practico_10_no">No</label>
        <input type="radio" name="practico_10" value="no" required>
        
        <p>No me gusta romper los esquemas.</p>
        <label for="organizado_10_si">Sí</label>
        <input type="radio" name="organizado_10" value="si" required>
        <label for="organizado_10_no">No</label>
        <input type="radio" name="organizado_10" value="no" required>
    
        <p>Prefiero ser el primero en decidir.</p>
        <label for="activo_10_si">Sí</label>
        <input type="radio" name="activo_10" value="si"required>
        <label for="activo_10_no">No</label>
        <input type="radio" name="activo_10" value="no" required>
        
        <br><br>
        <a href="instrucciones_TEA.php" class="back-button" >Volver Atrás</a>
        <input class="send-button" type="submit" value="Enviar">
    </form>
</body>
</html>
