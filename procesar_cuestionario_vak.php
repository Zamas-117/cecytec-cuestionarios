<?php
session_start();
include('conectarbasededatos.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //STILOS
    echo'<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 0;
        background: url("Imagenes/riberas23.jpg") no-repeat center center fixed;
        background-size: cover;
    }

    .barra-superior {
        position: relative;
        top: 0;
        left: 0;
        right: 0;
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
        margin-left:;
        color: black;
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

    /* Fondo blanco para la tabla */
    table {
        background-color: white; /* Asegura que el fondo sea blanco */
        border-collapse: collapse;
        width: 100%;
        position:relative;
        margin-top: 40px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 15px;
        text-align: left;
    }

    /* Estilo para las celdas del encabezado */
    th {
        background-color: #f2f2f2;
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

    .button_slide {
        color: Black;
        background-color: rgba(164, 172, 172, 0.8);
        border-radius: 0px;
        padding: 25px 50px;
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

    /* Alineación de los botones debajo de la barra superior */
    .botones-container {
        margin-top: 15px;
    }
    
    @media (max-width: 1080px) {
            .container {
                display: flex;
                justify-content: space-around;
                flex-direction: column;
                position:relative;
            }

            .barra-superior p {
                font-size: 1.4em;
                margin-left: 6%;
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
        .barra-superior
        {
            position:relative;
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
<div class="barra-superior">
    <img src="Imagenes/LogoC.png" alt="Logo" />
    <p>Resultados</p>
    </div>';
    
    $respuestas = $_POST; // Todas las respuestas están en $_POST

// Inicializar contadores para cada tipo de aprendizaje
$auditivo = 0;
$visual = 0;
$kinestesico = 0;

// Iterar a través de las respuestas y contar los tipos de aprendizaje
foreach ($respuestas as $respuesta) {
    // Verificar el tipo de aprendizaje y aumentar el contador correspondiente
    if (strpos($respuesta, 'auditivo') !== false) {
        $auditivo++;
    } elseif (strpos($respuesta, 'visual') !== false) {
        $visual++;
    } elseif (strpos($respuesta, 'kinestesico') !== false) {
        $kinestesico++;
    }
}

// Asociar los conteos con las categorías
$conteos = array(
    "auditivo" => $auditivo,
    "visual" => $visual,
    "kinestesico" => $kinestesico
);

// Encuentra la categoría con el conteo más alto
$categoria_maxima = array_keys($conteos, max($conteos))[0];

// Define el mensaje basado en la categoría con el conteo más alto
$quesoy = ucfirst($categoria_maxima);

// Si hay empates, agrega las categorías al mensaje
$empates = array_filter($conteos, function ($conteo) use ($conteos, $categoria_maxima) {
    return $conteo == $conteos[$categoria_maxima];
});

if (count($empates) > 1) {
    $quesoy = implode(", ", array_keys($empates));
}

  
// Mostrar los conteos individuales
  echo "<div style='font-size: 2em; margin-top: 5%;'>Tipo(s) de aprendizaje dominante(s): $quesoy</div>";
    echo "<p style='font-size: 2em;'>Respuestas auditivas: $auditivo</p>";
    echo "<p style='font-size: 2em;'>Respuestas visuales: $visual</p>";
    echo "<p style='font-size: 2em;'>Respuestas kinestésicas: $kinestesico</p>";echo'<a href="test_menu.php" class="back-button" >Volver al menu    </a><br>';

 $nombre_alumno=$_SESSION['alumno_name'];
    // Consulta para la tabla 'Alumno'
    // Consulta SQL con parámetros para evitar SQL injection
    $sqlAlumno = "SELECT Id_Alumno, Grupo FROM Alumno WHERE Nombre_A = ?";
    
    // Preparación de la consulta
    $stmt = mysqli_prepare($conexion, $sqlAlumno);
    
    // Vincula el parámetro
    mysqli_stmt_bind_param($stmt, "s", $nombre_alumno);
    
    // Ejecuta la consulta
    mysqli_stmt_execute($stmt);
    
    // Obtiene el resultado
    $resultadoAlumno = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultadoAlumno)) {
        $id_alumno = $row['Id_Alumno'];
        $grupo_alumno = $row['Grupo'];
    } else {
        echo "No se encontró ningún alumno con ese nombre.";
    }


// Consulta de inserción en la tabla 'Tea'
$sqlInsercionTea = "INSERT INTO Vak (Id_Alumno, VAK, Grupo_Vak, Terminado_Vak) VALUES (?, ?, ?, 'SI')";
$stmtInsercionTea = mysqli_prepare($conexion, $sqlInsercionTea);
mysqli_stmt_bind_param($stmtInsercionTea, "iss", $id_alumno, $quesoy, $grupo_alumno);
mysqli_stmt_execute($stmtInsercionTea);
mysqli_stmt_close($stmtInsercionTea);

if (!$stmtInsercionTea) {
    die("Error en la consulta de inserción: " . mysqli_error($conexion));
}

// Cerrar la conexión

     mysqli_stmt_close($stmt);
    mysqli_close($conexion);
    
    // Guarda los resultados en un archivo o en una base de datos
    // Puedes usar la opción que prefieras para almacenar los resultados

    // Redirecciona a una página de agradecimiento o resultados
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Test</title>
</head>

<body>
      <div class="botones-container">
        <!-- Botones para mostrar las tablas -->
        <button id="mostrarReflexivo" class="button_slide">V</button>
        <button id="mostrarPractico" class="button_slide">A</button>
        <button id="mostrarOrganizado" class="button_slide">K</button>
        <button id="mostrarReferencias" class="button_slide">Mostrar Referencias</button>
      </div>
    <!-- Div para mostrar las tablas -->
    <div id="tablaResultado"></div>

    <script>
        // Función para mostrar la tabla del tipo seleccionado
        function mostrarTabla(tipo) {
            let tabla = "";

            // Según el tipo seleccionado, asigna la tabla correspondiente
            switch (tipo) {
                case "Reflexivo":
                    tabla = `
                        <h2>VISUAL</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Se comporta</td>
            <td>1) Organizado, ordenado, observador y tranquilo. Preocupado por su aspecto. La capacidad de abstracción y la capacidad de planificar están directamente relacionadas con la capacidad de visualizar. Recuerda las imágenes, las escenas de una película. Tiene recuerdos "visuales" muy vivos. Utiliza palabras visuales. (Como vimos el día anterior, ¿ves lo que te digo? ¿Cómo no ves lo que me estás diciendo?). Disfruta con las artes, los estímulos visuales, tiene buen sentido de la orientación, tiene facilidad para recordar caras, juegos de recordar parejas. (Visual espacial). Apagan la radio en situaciones de tráfico donde necesitan mayor atención visual. Tiene mucha energía, habla a veces muy deprisa. Suelen ser personas ordenadas.</td>
        </tr>
        <tr>
            <td>Aprende</td>
            <td>Aprende mejor a través de estímulos visuales, cuando ve o lee la información. En una conferencia o exposición, prefiere leer las copias o las proyecciones que seguir la explicación oral o, en su defecto, tomará notas para tener algo que leer. Necesita una visión detallada y saber a dónde va. Le cuesta recordar lo que oye. Si se le llegase a olvidar una palabra, no hay mayor problema porque sigue "viendo" mentalmente el contexto de la información. Tiene mayor facilidad para absorber grandes cantidades de información con rapidez. Memoriza mejor con diagramas, cuadros, esquemas.</td>
        </tr>
        <tr>
            <td>Lee</td>
            <td>Le gustan las descripciones; a veces se queda con la mirada perdida, imaginándose la escena.</td>
        </tr>
        <tr>
            <td>Memoriza</td>
            <td>Recuerda lo que ve, por ejemplo las caras, pero no los nombres. Tiene facilidad para recordar lo leído en lugar de lo escuchado (Visual lingüístico). Escribe las cosas para recordarlas mejor. (Visual lingüístico).</td>
        </tr>
        <tr>
            <td>Almacena la Información</td>
            <td>Rápidamente y en cualquier orden.</td>
        </tr>
        <tr>
            <td>Se Comunica</td>
            <td>Se impacienta si tiene que escuchar mucho rato seguido. Utiliza palabras como "ver, aspecto...".</td>
        </tr>
        <tr>
            <td>Se distrae</td>
            <td>Cuando hay movimiento o desorden visual, sin embargo, el ruido no le molesta demasiado.</td>
        </tr>
        <tr>
            <td>Acxtividades del alumno</td>
            <td>Contar una historia partiendo de viñetas, fotos o texto; dictarle a otro; dibujar cómics con texto; leer y visualizar a un personaje; realizar mapas conceptuales, mapas mentales, diagramas.</td>
        </tr>
        <tr>
            <td>Actividades del docente</td>
            <td>Escribir en la pizarra lo que se está explicando oralmente. Utilizar soporte visual para la información oral (fotos, imágenes, diapositivas). Escribir en la pizarra, acompañar los textos con fotos; clases o videos on-line; representación gráfica de datos.</td>
        </tr>
        <tr>
            <td>Ojo</td>
            <td>Recuerda que todos tenemos los tres sistemas representacionales y que, a veces, podemos utilizar uno más que otro dependiendo del contexto. Podemos ser más visuales a la hora de trabajar, y más kinestésicos a la hora de hacer un viaje...</td>
        </tr>
    </table>
                    `;
                    break;
                case "Practico":
                    tabla = `
                        <h2>AUDITIVO</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Se comporta</td>
            <td>Habla solo, se distrae fácilmente. Mueve los labios al leer. Facilidad de palabra, no le preocupa especialmente su aspecto. Monopoliza la conversación; le gusta la música. Modula el tono y timbre de voz. Expresa sus emociones verbalmente. Puede tararear o hablar solo en algún momento. Necesita hablarse, escucharse. Prefiere las instrucciones verbales a las instrucciones escritas. Son más tranquilos que las personas visuales. Se les dan bien las profesiones donde escuchar suele ser importante. Pueden molestarle algunos timbres de voz de las personas.</td>
        </tr>
        <tr>
            <td>Aprende</td>
            <td>Aprende mejor a través de estímulos sonoros y lo que oye, a base de repetirse a sí mismo paso a paso todo el proceso. Se le facilita el aprendizaje de idiomas y de la música. Aprende mejor si recibe explicaciones oralmente y cuando puede hablar y explicar esa información a otra persona. Si se olvida de un solo paso, se pierde. No tiene una visión global. Se le dificulta un poco más la elaboración de conceptos abstractos. Tiene que recordar todo, palabra por palabra, pues si se le olvida una, no sabe seguir. Recuerda mejor lo que ha oído que lo que ha visto y lo hace de manera secuencial y ordenada.

</td>
        </tr>
        <tr>
            <td>En el aula</td>
            <td>El ambiente auditivo debe ser claro y carente de ambigüedad. Los niveles de motivación, tanto intrínsecos como extrínsecos, deben ser elevados. Un ambiente donde pueda identificar los elementos distintivos de la información que recibe y debe asimilar. La formación del precepto debe ser precisa. Debe poder saber cómo escudriñar la información auditiva, reconocer el modelo auditivo. Por ejemplo, la intención del hablante (debe reconocer los elementos y comprenderlos). El profesor debe mantener una constante perceptiva. Para esto, debe exagerar al principio los rasgos distintivos que le permitan al estudiante establecer el precepto y darle significado a este.</td>
        </tr>
        <tr>
            <td>Lee</td>
            <td>Le gustan los diálogos y las obras de teatro; evita las descripciones largas; mueve los labios y no se fija en las ilustraciones.</td>
        </tr>
        <tr>
            <td>Memoriza</td>
            <td>Recuerda lo que oye, por ejemplo, los nombres, pero no las caras.</td>
        </tr>
        <tr>
            <td>Imagina</td>
            <td>Piensa en sonidos, no recuerda tantos detalles.</td>
        </tr>
        <tr>
            <td>Almacena la Información</td>
            <td>De manera secuencial y por bloques enteros, por lo que se pierde si le preguntas por un elemento aislado o si le cambias el orden de las preguntas.</td>
        </tr>
        <tr>
            <td>Se Comunica</td>
            <td>Le gusta escuchar, pero tiene que hablar ya. Hace largas y repetitivas descripciones. Utiliza palabras como "sonar", "ruido". Usa lenguaje auditivo; (¿Te suena lo que te he dicho? Comprendido fuerte y claro.) Me llama mucho la atención. No sé, no me suena.</td>
        </tr>
        <tr>
            <td>Se distrae</td>
            <td>Cuando hay ruido.</td>
        </tr>
        <tr>
            <td>Escritura</td>
            <td>Comete faltas ortográficas. Dice las palabras y las escribe según el sonido.</td>
        </tr>
        <tr>
            <td>Durante periodos de inactividad</td>
            <td>Canturrea para sí mismo o habla con alguien.</td>
        </tr>
        <tr>
            <td>Actividades del alumno</td>
            <td>Realizar un debate. Preguntarse unos a otros. Escuchar una grabación. Escribir un dictado. Leer y grabarse a sí mismos. Juegos de asociación de palabras.</td>
        </tr>
        <tr>
            <td>Actividades del docente</td>
            <td>Dar instrucciones verbales. Repetir sonidos parecidos. Dictar. Leer el mismo texto con distinta inflexión. Radio, televisión.</td>
        </tr>
        <tr>
            <td>Ojo</td>
            <td>Recuerda que todos tenemos los tres sistemas representacionales y que, a veces, podemos utilizar uno más que otro dependiendo del contexto. Podemos ser más visuales a la hora de trabajar y más kinestésicos a la hora de hacer un viaje…</td>
        </tr>
    </table>
                    `;
                    break;
                case "Organizado":
                    tabla = `
                        <h2>KINESTESICO</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Se comporta</td>
            <td>Responde a las muestras físicas de cariño, le gusta tocarlo todo, se mueve y gesticula mucho. Sale bien arreglado de casa, pero enseguida se arruga porque no para. Le agrada trabajar con las manos. Caminan cuando hablan por teléfono. Tienen predilección para las actividades que requieran destrezas físicas (nadar, bailar, hacer yoga). Tono de voz más bajo, pero habla alto, con la barbilla hacia abajo. Expresa sus emociones con movimientos.</td>
        </tr>
        <tr>
            <td>Aprende</td>
            <td>Aprende con lo que toca y lo que hace. Necesita estar involucrado personalmente en alguna actividad. Aprende mejor a través de estímulos físicos que ponen en marcha los sentidos del tacto, del olfato y/o del gusto. Aprende mejor escribiendo con un teclado. Se debe tener paciencia, pues su método de aprendizaje es mucho más lento que cualquier otro; por tanto, requiere más tiempo que los demás para entender, y si llegara a pensar que es lento no tiene que ver con falta de inteligencia, sino con su forma distinta de aprender. Lo que llegue a aprender muscularmente (con el cuerpo) será muy difícil de olvidar. Aprende mejor con experimentos de laboratorio o proyectos; necesita moverse, pasearse o balancearse.</td>
        </tr>
        <tr>
            <td>Lee</td>
            <td>Le gustan las historias de acción; se mueve al leer. No es un gran lector.</td>
        </tr>
        <tr>
            <td>Memoriza</td>
            <td>Recuerda lo que hizo o la impresión general que eso le causó, pero no los detalles. Recuerda mejor experimentando, haciendo las cosas que solo leyendo o escuchando.</td>
        </tr>
        <tr>
            <td>Imagina</td>
            <td>Las imágenes son pocas y poco detalladas, siempre en movimiento.</td>
            
        </tr>
        <tr>
            <td>Almacena la Información</td>
            <td>Mediante la "memoria muscular".</td>
        </tr>
        <tr>
            <td>Se Comunica</td>
            <td>Gesticula al hablar. No escucha bien. Se acerca mucho a su interlocutor, se aburre enseguida. Usa lenguaje metafórico vinculado al tacto, olfato o gusto (Esto me sabe mal, pero..., ¿me das una mano con esto?, siento que no comprendes). Son más lentos para hablar, no tienen prisa como los visuales. Utiliza palabras como "tomar", "impresión...".</td>
        </tr>
        <tr>
            <td>Escritura</td>
            <td>Comete faltas ortográficas, escribe las palabras y comprueba si "le dan buena espina".</td>
        </tr>
        <tr>
            <td>Se distrae</td>
            <td>Cuando las explicaciones son básicamente auditivas o visuales y no le involucran de alguna forma. Se desconcentra muy fácilmente cuando hay ruido, música fuerte, demasiada gente hablando.</td>
        </tr>
        <tr>
            <td>En perdiodos de inactividad</td>
            <td>Se mueve, esta en constante movimeinto.</td>
        </tr>
        <tr>
            <td>Actividades del alumno</td>
            <td>Representar "Rol playing" (dramatizaciones, obras de teatro). Representar acciones a través de posturas o gestos. Escribir sobre las sensaciones que experimentan ante un objeto. Leer un texto y dibujar algo alusivo. Realizar una escultura u objeto con plastilina que refiera a lo que comprendieron de un texto. Baile, danza, actividades deportivas relacionadas con las materias. Tener las manos ocupadas.</td>
        </tr>
        <tr>
            <td>Actividades del docente</td>
            <td>Utilización de gestos para acompañar las instrucciones orales. Corregir mediante gestos y señas. Intercambiar "feedback" por escrito. Leer un texto expresando las emociones. Diseñar zonas y cambiar de sitio el mobiliario para satisfacer las necesidades táctiles y de movimiento de los alumnos. Aplicaciones prácticas de los conceptos.</td>
        </tr>
        <tr>
            <td>OJO</td>
            <td>Recuerda que todos tenemos los tres sistemas representacionales y que, a veces, podemos utilizar uno más que otro dependiendo del contexto. Podemos ser más visuales a la hora de trabajar y más kinestésicos a la hora de hacer un viaje…</td>
        </tr>
    </table>
                    `;
                    break;
                    case "Referencias":
                    tabla = `
                        <h2>Referencias bibliograficas</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>Canton Rubén, eres Visual, Auditivo o kinestésico, 2009</td>
            
        <tr>
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>Cortese Abel, Canal Preferido para aprender y Estudiar</td>
        <tr>    
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>Escuela de Salud Pública de México, Test de Kolb</td>
        
        <tr>    
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>Instituto Americano de Formación e Investigación, Test del canal de Aprendizaje de preferencia en PNL.</td>
        <tr>    
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>Romo Aliste M Eugenia, ¿Eres visual, auditivo o kinestésico? Estilos de aprendizaje desde el modelo de la Programación, Revista Iberoamericana de Educación (ISSN: 1681-5653).</td>
        <tr>    
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>Silvent Martha, Rueda del Aprendizaje de Kolb, 2008.</td>
        <tr>    
    </table>
    <p>Mi más sincero agradecimiento a los tutores por su esfuerzo incansable en el aula.</p>
                    `;
                    break;
            }

            // Mostrar la tabla en el div "tablaResultado"
            document.getElementById("tablaResultado").innerHTML = tabla;
        }

        // Event listeners para los botones
        document.getElementById("mostrarReflexivo").addEventListener("click", function() {
            mostrarTabla("Reflexivo");
        });

        document.getElementById("mostrarPractico").addEventListener("click", function() {
            mostrarTabla("Practico");
        });

        document.getElementById("mostrarOrganizado").addEventListener("click", function() {
            mostrarTabla("Organizado");
        });
        document.getElementById("mostrarReferencias").addEventListener("click", function() {
            mostrarTabla("Referencias");
        });
    </script>
</body>
</html>

