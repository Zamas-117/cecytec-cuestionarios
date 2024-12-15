<?php
session_start();
include('conectarbasededatos.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    
    //STILOS
    
    
    $respuestas = $_POST; // Todas las respuestas están en $_POST

    // Inicializa un array asociativo para contar las respuestas por categoría
    $conteos = [
        "reflexivo" => 0,
        "organizado" => 0,
        "practico" => 0,
        "activo" => 0
    ];

    // Recorre todas las respuestas y suma los "Sí" por categoría
    foreach ($respuestas as $pregunta => $respuesta) {
        foreach ($conteos as $categoria => $conteo) {
            if (strpos($pregunta, $categoria . "_") === 0 && $respuesta === "si") {
                $conteos[$categoria]++;
            }
        }
    }
    
  
     
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
    
    echo "<div style='font-size: 1em; margin-top: 5%;'>Tipo(s) de aprendizaje dominante(s): $quesoy</div>";
    
    
     echo "<br>Puntaje Reflexivo: " . $conteos["reflexivo"] . "<br>";
    echo "Puntaje Organizado: " . $conteos["organizado"] . "<br>";
    echo "Puntaje Práctico: " . $conteos["practico"] . "<br>";
    echo "Puntaje Activo: " . $conteos["activo"] . "<br>";
    echo'<a href="test_menu.php" class="back-button" >Volver al menu    </a><br>';
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
$sqlInsercionTea = "INSERT INTO Tea (Id_Alumno, TEA, Grupo_Tea, Terminado_Tea) VALUES (?, ?, ?, 'SI')";
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
    <button id="mostrarReflexivo">Mostrar Reflexivo</button>
    <button id="mostrarPractico">Mostrar Práctico</button>
    <button id="mostrarOrganizado">Mostrar Organizado</button>
    <button id="mostrarActivo">Mostrar Activo</button>
    <button id="mostrarReferencias">Mostrar Referencias</button>
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
                        <h2>REFLEXIVO</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Descripción</td>
            <td>1) Su filosofía es la prudencia, no dejan piedra sin mover, miran bien antes de pasar. 2) Gustan considerar todas las alternativas posibles antes de cualquier movimiento. 3) Disfrutan observando la actuación de los demás, los escuchan y no intervienen hasta haberse adueñado de la situación. 4) Crean a su alrededor un clima algo distante y condescendiente. Características principales: Ponderado, concienzudo, receptivo, analítico, exhaustivo. Otras características Observador, recopilador, paciente, cuidadoso, detallista, elaborador de argumentos, previsor de alternativas, estudioso de comportamientos, registrador de datos, investigador, asimilador, escritor de informes, lento, distante, prudente, inquisidor, sondeador.</td>
        </tr>
        <tr>
            <td>Características Generales</td>
            <td>Los alumnos convergentes o reflexivos tienden a adoptar la postura de un observador que analiza sus experiencias desde muchas perspectivas distintas. Recogen datos y los analizan detalladamente antes de llegar a una conclusión. Para ellos lo más importante es esa recogida de datos y su análisis concienzudo, así que procuran posponer las conclusiones todos lo que pueden. Son precavidos y analizan todas las implicaciones de cualquier acción antes de ponerse en movimiento. En las reuniones observan y escuchan antes de hablar, procurando pasar desapercibidos. La pregunta que quieren responder con el aprendizaje es ¿Por qué?</td>
        </tr>
        <tr>
            <td>Aprenden</td>
            <td>Los alumnos reflexivos aprenden mejor: Cuando pueden adoptar la postura del observador. Cuando pueden ofrecer observaciones y analizar la situación. Cuando pueden pensar antes de actuar.
            Les cuesta más aprender: Cuando se les fuerza a convertirse en el centro de la atención. Cuando se les apresura de una actividad a otra. Cuando tienen que actuar sin poder planificar previamente.</td>
        </tr>
        <tr>
            <td>Facilidades y obstáculos para aprender</td>
            <td>Aprenden mejor los que tienen preferencia por el estilo reflexivo cuando pueden: 1) Observar. Distanciarse de los acontecimientos. 2) Reflexionar sobre actividades. 3) Intercambiar opiniones con otros con previo acuerdo. 4) Decidir a un ritmo propio. Trabajar sin presiones ni plazos. 5) Revisar lo aprendido. 6) Investigar con detenimiento. 7) Reunir información. 8) Sondear para llegar al fondo de las cuestiones. 9) Pensar antes de actuar. 10) Asimilar antes de comentar. 11) Escuchar, incluso las opiniones más diversas. 12) Hacer análisis detallados. 13) Ver con atención un film sobre un tema. 14) Observar a un grupo mientras trabaja.</td>
        </tr>
        <tr>
            <td>Preguntas claves para los reflexivos: </td>
            <td>1) ¿Tendré tiempo suficiente para analizar, asimilar, y preparar? 2) ¿Habrá oportunidades y facilidad para reunir la información pertinente? 3) ¿Podré oír los puntos de vista de otras personas, preferiblemente de opiniones diferentes? 4) ¿Me veré sometido a presión para actuar improvisadamente?</td>
        </tr>
        <tr>
            <td>El aprendizaje será más difícil para los reflexivos cuando tengan que:</td>
            <td>1) Ocupar el primer plano. Actuar de líder. 2) Presidir reuniones o debates. 3) Dramatizar ante otras personas. Representar algún rol. 4) Participar en actividades no planificadas. 5) Hacer algo sin previo aviso. Exponer ideas espontáneamente. 6) No tener datos suficientes para sacar una conclusión. 7) Estar presionado por el tiempo. 8) Verse obligado a pasar rápidamente de una actividad a otra. 9) Hacer un trabajo superficialmente.</td>
        </tr>
        <tr>
            <td>Como mejorar el estilo Convergente - Reflexivo</td>
            <td>Bloqueos más frecuentes que impiden el desarrollo el estilo reflexivo: 1) No tener tiempo suficiente para planificar y pensar. 2) Preferir el cambiar rápidamente de una actividad a otra. 3) Estar impaciente por comenzar la acción. 4) Tener resistencia a escuchar cuidadosamente. 5) Tener resistencia a presentar las cosas por escrito.
            Sugerencias para mejorar el estilo reflexivo: 1) Practicar la observación. Estudiar el comportamiento de las personas (anotar quien habla más, quien interrumpe, con qué frecuencia resume el profesor, etc.; estudiar el comportamiento no verbal, cuando las personas miran el reloj, cruzan los brazos, muerden el lápiz, etc.). 2) Llevar un diario personal. Reflexionar sobre los acontecimientos del día y ver si se pueden obtener conclusiones de ellos. 3) Practicar la revisión después de una reunión o acontecimiento (repasar la secuencia de los acontecimientos, lo que fue bien, lo que se podría mejorar; registrar en cinta un diálogo y reproducirlo al menos dos veces; listar lecciones aprendidas de esa forma). 4) Investigar algo que exija una difícil recogida de datos de diferentes fuentes. Pasar varias horas en la biblioteca consultando ficheros. 5) Practicar la manera de escribir con sumo cuidado (escribir ensayos sobre distintos temas; escribir un artículo o informe sobre algo). 6) Guardar lo ya escrito durante una semana y luego forzarse a volver para mejorarlo. 7) Tomar un asunto controvertido y elaborar argumentos equilibrados desde dos puntos de vista. Hacer listas a favor y en contra de un determinado curso, diálogo, tema de conversación, etc. 8) Prevenir las personas deseosas de lanzarse a la acción, para que consideren alternativas y prevean las consecuencias.</td>
        </tr>
        <tr>
            <td>Estrategias metodlógicas</td>
            <td>Actividades manuales, Proyectos prácticos, Hacer gráficos y mapas, Clasificar información, Ejercicios de memorización, Resolución de problemas prácticos, y Demostraciones prácticas.</td>
        </tr>
    </table>
                    `;
                    break;
                case "Practico":
                    tabla = `
                        <h2>PRACTICO</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Descripción</td>
            <td>1) Gusta de actuar rápidamente y con seguridad con las ideas y proyectos que le atraen. 2) Tienden a impacientarse cuando alguien teoriza. 3) Pisan la tierra cuando hay que tomar una decisión o resolver un problema. 4) Piensan que “siempre se puede hacer mejor; si funciona es bueno”. Características principales: Experimentador, práctico, directo, eficaz, realista. Otras características Técnico, útil, rápido, decidido, planificador, positivo, concreto, objetivo, claro, seguro de sí, organizador, actual, solucionador de problemas, aplicador de lo aprendido, y planificador de acciones.</td>
        </tr>
        <tr>
            <td>Características Generales</td>
            <td>A los alumnos acomodadores o pragmáticos les gusta probar ideas, teorías y técnicas nuevas, y comprobar si funcionan en la práctica. Les gusta buscar ideas y ponerlas en práctica inmediatamente, les aburren e impacientan las largas discusiones discutiendo la misma idea de forma interminable. Son básicamente gente práctica, apegada a la realidad, a la que le gusta tomar decisiones y resolver problemas. Los problemas son un desafío y siempre están buscando una manera mejor de hacer las cosas. La pregunta que quieren responder con el aprendizaje es ¿Qué pasaría si...? </td>
        </tr>
        <tr>
            <td>Aprenden</td>
            <td>Los alumnos pragmáticos aprenden mejor: Con actividades que relacionen la teoría y la práctica. Cuando ven a los demás hacer algo. Cuando tienen la posibilidad de poner en práctica inmediatamente lo que han aprendido.
            Les cuesta más aprender: Cuando lo que aprenden no se relacionan con sus necesidades inmediatas. Con aquellas actividades que no tienen una finalidad aparente. Cuando lo que hacen no está relacionado con la 'realidad'. </td>
        </tr>
        <tr>
            <td>Facilidades y obstáculos para aprender</td>
            <td>Aprenden mejor los que tienen preferencia por el estilo pragmático cuando pueden: 1) Aprender técnicas para hacer las cosas con ventajas prácticas evidentes. 2) Estar expuesto ante un modelo al que puede emular. 3) Adquirir técnicas inmediatamente aplicables en su trabajo. 4) Tener oportunidad inmediata de aplicar lo aprendido, de experimentar. 5) Elaborar planes de acción con un resultado evidente. 6) Dar indicaciones, sugerir atajos. 7) Poder experimentar con técnicas con asesoramiento de retorno de alguien experto. 8) Ver que hay nexo evidente entre el tema y un problema u oportunidad para aplicarlo. 9) Ver la demostración de un tema de alguien con historial reconocido. 10) Percibir muchos ejemplos y anécdotas. 11) Visionar films que muestran cómo se hacen las cosas. 12) Concentrarse en cuestiones prácticas. 13) Comprobar la validez inmediata del aprendizaje.14) Vivir una buena simulación, problemas reales. 15) Recibir muchas indicaciones prácticas y técnicas. </td>
        </tr>
        <tr>
            <td>Preguntas claves para los pragmáticos: </td>
            <td>1) ¿Habrá posibilidades de practicar y experimentar? 2) ¿Habrá suficientes indicaciones prácticas y concretas? 3) ¿Se abordarán problemas reales y me ayudarán a resolver los míos?</td>
        </tr>
        <tr>
            <td>El aprendizaje será más difícil para los pragmáticos cuando tengan que: </td>
            <td>1) Percatarse que el aprendizaje no tiene relación con una necesidad inmediata. 2) Percibir que tal aprendizaje no tiene importancia inmediata o beneficio práctico. 3) Aprender lo que está distante de la realidad. 4) Aprender teorías y principios generales. 5) Trabajar sin instrucciones claras sobre cómo hacerlo. 6) Considerar que las personas no avanzan con suficiente rapidez. 7) Comprobar que hay obstáculos burocráticos o personales para impedir la aplicación. 8) Cerciorarse que no hay recompensa evidente por la actividad de aprender.</td>
        </tr>
        <tr>
            <td>Como mejorar el estilo Acomodador - Pragmático</td>
            <td>Bloqueos más frecuentes que impiden el desarrollo el estilo pragmático: 1) Interés por la solución perfecta antes que por la práctica. 2) Considerar las técnicas útiles como simplificaciones exageradas. 3) Dejar siempre los temas abiertos y no comprometerse en acciones específicas. 4) Creer que las ideas de los demás no funcionan si se aplican a su situación. 5) Disfrutar con temas marginales o perderse en ellos.</td>
        </tr>
        <tr>
            <td>Estrategias Metodológicas</td>
            <td>Trabajos grupales, Ejercicios de imaginería, Trabajo de expresión artística, Lectura de trozos cortos, Discusión socializada, Composiciones sobre temas puntuales, Gráficos ilustrativos sobre los contenidos, Actividades de periodismo, entrevistas, Elaborar metáforas sobre contenidos, y Hacerle utilizar el ensayo y error.</td>
        </tr>
    </table>
                    `;
                    break;
                case "Organizado":
                    tabla = `
                        <h2>ORGANIZADO</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Descripción</td>
            <td>1) Enfocan los problemas vertical y escalonadamente, por etapas lógicas. 2) Tienden a ser perfeccionistas. 3) Integran hechos en teorías coherentes. Les gusta analizar y sintetizar. 4) Son profundos en su sistema de pensamiento cuando establecen principios, teorías y modelos. Si es lógico, es bueno. 5) Buscan la racionalidad y la objetividad huyendo de lo subjetivo y ambiguo. Características principales: Metódico, lógico, objetivo, crítico, estructurado. Otras características Disciplinado, planificado, sistemático, ordenado, sintético, razonador, pensador, relacionador, perfeccionista, generalizador, buscador de hipótesis, teorías, modelos, preguntas, supuestos subyacentes, conceptos, finalidades claras, racionalidad, porqués, sistemas de valores o criterios, inventor de procedimientos para..., y explorador. </td>
        </tr>
        <tr>
            <td>Características Generales</td>
            <td>Los alumnos asimiladores o teóricos adaptan e integran las observaciones que realizan en teorías complejas y bien fundamentadas lógicamente. Piensan de forma secuencial y paso a paso, integrando hechos dispares en teorías coherentes. Les gusta analizar y sintetizar la información y su sistema de valores premia la lógica y la racionalidad. Se sienten incómodos con los juicios subjetivos, las técnicas de pensamiento lateral y las actividades faltas de lógica clara. La pregunta que quieren responder con el aprendizaje es ¿Qué?</td>
        </tr>
        <tr>
            <td>Aprenden</td>
            <td>Los alumnos teóricos aprenden mejor: A partir de modelos, teorías, sistemas con ideas y conceptos que presenten un desafío. Cuando tienen oportunidad de preguntar e indagar.
            Les cuesta más aprender: Con actividades que impliquen ambigüedad e incertidumbre. En situaciones que enfaticen las emociones y los sentimientos. Cuando tienen que actuar sin un fundamento teórico.</td>
        </tr>
        <tr>
            <td>Facilidades y obstáculos para aprender</td>
            <td>Aprenden mejor los que tienen preferencia por el estilo teórico cuando pueden: 1) Sentirse en situaciones estructuradas y con una finalidad clara. 2) Inscribir todos los datos en un sistema, modelo, concepto o teoría. 3) Tener tiempo para explorar metódicamente las relaciones entre ideas y situaciones. 4) Tener la posibilidad de cuestionar. 5) Participar en una sesión de preguntas y respuestas. 6) Poner a prueba métodos y lógica que sean la base de algo. 7) Sentirse intelectualmente presionado. 8) Participar en situaciones complejas. 9) Analizar y luego generalizar las razones de algo bipolar, dual. 10) Llegar a entender acontecimientos complicados. 11) Recibir ideas interesantes, aunque no sean pertinentes en lo inmediato. 12) Leer u oír hablar sobre ideas que insisten en la racionalidad y la lógica. 13) Tener que analizar una situación completa. 14) Enseñar a personas exigentes que hacen preguntas interesantes. 15) Encontrar ideas complejas capaces de enriquecerle. 16) Estar con personas de igual nivel conceptual.</td>
        </tr>
        <tr>
            <td>Preguntas claves para los teóricos: </td>
            <td>1) Habrá muchas oportunidades de preguntar? 2) Los objetivos y las actividades del programa revelan una estructura y finalidad clara? 3) Encontraré ideas complejas capaces de enriquecerme? 4) Son sólidos y valiosos los conocimientos y métodos que van a utilizarse? 5) El nivel del grupo será similar al mío?</td>
        </tr>
        <tr>
            <td>El aprendizaje será más difícil para los teóricos cuando tengan que: </td>
            <td>1) Estar obligado a hacer algo sin un contexto o finalidad clara. 2) Tener que participar en situaciones donde predominan emociones y sentimientos. 3) Participar de actividades no estructuradas, de fin incierto o ambiguo. 4) Participar en problemas abiertos. 5) Tener que actuar o decidir sin una base de principios, políticas o estructura. 6) Verse ante la confusión de métodos o técnicas alternativos contradictorios sin poder explorarlos en profundidad, por improvisación. 7) Dudar si el tema es metodológicamente sólido. 8) Considerar que el tema es trivial, poco profundo o superficial. 9) Sentirse desconectado de los demás participantes porque tienen estilos diferentes (activos, por ejemplo), o por percibirlos intelectualmente inferiores.</td>
        </tr>
        <tr>
            <td>Como mejorar el estilo Asimilador - Teórico</td>
            <td>Bloqueos más frecuentes que impiden el desarrollo el estilo teórico: 1) Dejarse llevar por las primeras impresiones. 2) Preferir la intuición y la subjetividad. 3) Desagrado ante enfoques estructurados y organizados. 4) Preferencia por la espontaneidad y el riesgo.
            Sugerencias para mejorar el estilo teórico: 1) Leer algo denso que estimule el pensamiento durante 30 minutos diarios. Luego intentar resumir lo leído en palabras propias. 2) Practicar la detección de incoherencias o puntos débiles en argumentos de otros, en informes, etc. Tomar dos periódicos de ideología distinta y hacer regularmente un análisis comparativo de sus diferencias. 3) Tomar una situación compleja y analizarla para señalar porqué se realizó de esa forma, lo que pudo haberse hecho distinto y en qué momento (situaciones históricas o de la vida cotidiana; análisis de cómo se utilizó el propio tiempo; análisis de todas las personas con las que interactúa durante un día). 4) Resumir teorías, hipótesis y explicaciones de acontecimientos das por otras personas (ecología, sociología, ciencias naturales, conducta humana, etc., un tema con muchas contradicciones). Tratar de comprender y ver si se pueden agrupar las teorías similares. 5) Practicar la estructuración de situaciones de manera que sean ordenadas (estructurar el horario, las tareas, las sesiones, una reunión; establecer una finalidad clara; planificar el comienzo). 6) Inventar procedimientos para resolver problemas. 7) Practicar la manera de hacer preguntas exigentes que vayan al fondo de la cuestión, que estén encaminadas a averiguar por qué ha ocurrido algo. Rechazar respuestas vagas y faltas de concreción.</td>
        </tr>
        <tr>
            <td>Estrategias metodológicas</td>
            <td>Utilizar informes escritos, Investigaciones sobre la materia, Hacerlo tomar apuntes, Participar en debates, Asistir a conferencias, Encomendarle lectura de textos, y Ordenar datos de una investigación.</td>
        </tr>
    </table>
                    `;
                    break;
                case "Activo":
                    tabla = `
                        <h2>ACTIVO</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Descripción</td>
            <td>1) Mente abierta, no escépticos, acometen con entusiasmo nuevas tareas. 2) Gente del aquí y ahora que les encanta vivir nuevas experiencias. Días llenos de actividad. Piensan que al menos una vez hay que intentarlo todo. Apenas desciende la excitación de una actividad, buscan una nueva. 3) Crecen ante los desafíos de nuevas experiencias, y se aburren con los largos plazos. 4) Son personas muy de grupo que se involucran en los asuntos de los demás y centran a su alrededor todas las actividades. Características principales: Animador, improvisador, descubridor, arriesgado, espontáneo. Otras características Creativo, novedoso, aventurero, renovador, inventor, vital, vividor de la experiencia, generador de ideas, lanzado, protagonista, chocante, innovador, conversador, líder, voluntarioso, divertido, participativo, competitivo, deseoso de aprender, solucionador de problemas, cambiante.</td>
        </tr>
        <tr>
            <td>Características Generales</td>
            <td>Los alumnos Divergentes o activos se involucran totalmente y sin prejuicios en las experiencias nuevas. Disfrutan el momento presente y se dejan llevar por los acontecimientos. Suelen ser de entusiastas ante lo nuevo y tienden a actuar primero y pensar después en las consecuencias. Llenan sus días de actividades y tan pronto disminuye el encanto de una de ellas se lanzan a la siguiente. Les aburre ocuparse de planes a largo plazo y consolidar los proyectos, les gusta trabajar rodeados de gente, pero siendo el centro de las actividades. La pregunta que quieren responder con el aprendizaje es ¿Cómo?</td>
        </tr>
        <tr>
            <td>Aprenden</td>
            <td>Los activos aprenden mejor: Cuando se lanzan a una actividad que les presente un desafío. Cuando realizan actividades cortas e de resultado inmediato. Cuando hay emoción, drama y crisis.
            Les cuesta más trabajo aprender: Cuando tienen que adoptar un papel pasivo. Cuando tienen que asimilar, analizar e interpretar datos. Cuando tienen que trabajar solos. </td>
        </tr>
        <tr>
            <td>Facilidades y obstáculos para aprender</td>
            <td>Aprenden mejor los que tienen preferencia por el estilo activo cuando pueden: 1) Intentar nuevas experiencias y oportunidades. 2) Competir en equipo. 3) Generar ideas sin limitaciones formales. 4) Resolver problemas. 5) Cambiar y variar las cosas. 6) Abordar quehaceres múltiples. 7) Dramatizar. Representar roles. 8) Poder realizar variedad de actividades diversas. 9) Vivir situaciones de interés, de crisis. 10) Acaparar la atención. 11) Dirigir debates, reuniones. 12) Hacer presentaciones. 13) Intervenir activamente. 14) Arriesgarse. 15) Sentirse ante un reto con recursos inadecuados y situaciones adversas. 16) Realizar ejercicios actuales. 17) Resolver problemas como parte de un equipo. 18) Aprender algo nuevo, que no sabía o que no podía hacer antes. 19) Encontrar problemas o dificultades exigentes. 20) Intentar algo diferente, dejarse ir. 21) Encontrar personas de mentalidad semejante con las que pueda dialogar. 22) No tener que escuchar sentado una hora seguida.</td>
        </tr>
        <tr>
            <td>Preguntas claves para los activos</td>
            <td>1) ¿Aprenderé algo nuevo, algo que no sabía o no podía hacer antes? 2) ¿Habrá amplia variedad de actividades? No quiero tener que escuchar mucho tiempo sentado sin hacer nada. 3) ¿Se aceptará que intente algo nuevo, cometa errores, me divierta? 4) ¿Encontraré algunos problemas y dificultades para que sean un reto para mí? 5) ¿Habrá otras personas de mentalidad similar a la mía con las que poder dialogar?</td>
        </tr>
        <tr>
            <td>El aprendizaje será más difícil para los activos cuando tengan que: </td>
            <td>1) Exponer temas muy teóricos: explicar causas, antecedentes, etc. 2) Asimilar, analizar e interpretar muchos datos que no están claros. 3) Prestar atención a los detalles o hacer trabajos que exijan detallismo. 4) Trabajar solos, leer, escribir o pensar solo. 5) Evaluar de antemano lo que va a aprender. 6) Ponderar lo ya realizado o aprendido. 7) Repetir la misma actividad. 8) Estar pasivo: oír conferencias, exposiciones de cómo deben hacerse las cosas, etc. 9) Sufrir la implantación y consolidación de experiencias a largo plazo. 10) Tener que seguir instrucciones precisas con poco margen de maniobra. 11) No poder participar. Tener que mantenerse a distancia. 12) Asimilar, analizar e interpretar gran cantidad de datos sin coherencia. 13) Hacer un trabajo concienzudo.</td>
        </tr>
        <tr>
            <td>Como mejorar el estilo Divergente - Activo</td>
            <td>Bloqueos más frecuentes que impiden el desarrollo el estilo activo: 1) Miedo al fracaso o a cometer errores. 2) Miedo al ridículo. 3) Ansiedad ante cosas nuevas o no familiares. 4) Fuerte deseo de pensar detenidamente las cosas con anterioridad. 5) Falta de confianza en sí mismo. 6) Tomar la vida muy concienzudamente.
            Sugerencias para mejorar el estilo activo: 1) Hacer algo nuevo al menos una vez por semana (llevar algo llamativo al lugar de estudio; leer un periódico con opiniones contrarias a las suyas; cambiar los muebles de sitio). 2) Practicar la iniciación de conversaciones con extraños (en grandes reuniones forzarse a iniciar y sostener conversaciones con todos los presentes, si es posible; en el tiempo libre intentar dialogar con desconocidos o convencerles de nuestras ideas). 3) Deliberadamente fragmentar el día cambiando actividades cada media hora (hacer el cambio lo más diversos posible; después de una actividad cerebral hacer una tarea rutinaria o mecánica). 4) Forzarse a uno mismo a ocupar el primer plano (presentarse como voluntario para hablar, presidir reuniones; en una reunión, someterse a sí mismo a la prueba de hacer aportación sustancial en los diez primeros minutos).</td>
        </tr>
        <tr>
            <td>Estrategias metodológicas</td>
            <td> Lluvia de ideas, Ejercicios de simulación, Proponer nuevos enfoques a un problema, Predecir resultados, Emplear analogías, Realizar experimentos, Construir mapas conceptuales, Resolver puzzles, Ensamblar rompecabezas, y Adivinar acertijos.</td>
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
            <td>1) Alonso C. M., Honey P., 1995 "Los estilos de aprendizaje. Procedimientos de diagnóstico y mejora"
            </td>
            
        <tr>
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>2)
            M.E.C.E. 1997. Mejorando el aprendizaje de nuestros alumnos. MINEDUC. Manual para grupos, profesionales de trabajo. 3ª edición. 
            </td>
        <tr>    
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>3)Norma Lucila y Elizabeth Eugenia Diagnóstico de estilos de aprendizaje en alumnos de educación media superior Revista D. Universitaria, 2008.
            </td>
        <tr>    
            <td>Para la realización de esta prueba se consultaron las siguientes obras:</td>
            <td>4) Mi más sincero agradecimiento a los Tutores por su esfuerzo incansable en el aula.
            </td>
        </tr>
        
    </table>
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

        document.getElementById("mostrarActivo").addEventListener("click", function() {
            mostrarTabla("Activo");
        });
        document.getElementById("mostrarReferencias").addEventListener("click", function() {
            mostrarTabla("Referencias");
        });
    </script>
</body>
</html>

