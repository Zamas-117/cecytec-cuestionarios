<?php
session_start();
include('conectarbasededatos.php');


// Verifica si se ha enviado el formulario
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
    // Inicializa variables para los puntos totales de MS, MP y MR
    $total_MS = 0;
    $total_MP = 0;
    $total_MR = 0;

    // Recopila los valores de las selecciones y suma los puntos
    for ($i = 1; $i <= 8; $i++) {
        $total_MS += (int)$_POST["MS_$i"];
    }
    for ($i = 1; $i <= 9; $i++) {
        $total_MP += (int)$_POST["MP_$i"];
    }
    for ($i = 1; $i <= 7; $i++) {
        $total_MR += (int)$_POST["MR_$i"];
    }
    
    $conteos = array
    (
    "MS" => (($total_MS*100)/56),
    "MP" => (($total_MP*100)/63),
    "MR" => (($total_MR*100)/49)
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
    // Mostrar el tipo de aprendizaje dominante o los tipos empatados
    echo "<div style='font-size: 1em; margin-top: 5%;'>Tipo(s) de aprendizaje dominante(s): $quesoy</div>";
    // Puedes mostrar los puntos totales o hacer cualquier otra operación aquí
    echo "Puntos totales de MS: $total_MS<br>";
    echo "Puntos totales de MP: $total_MP<br>";
    echo "Puntos totales de MR: $total_MR<br><br>";
    
    //PROCESAR CUESTIONARIO 2
    $total_MRM = 0;
    $total_EATM = 0;
    $total_BCAE = 0;
    $total_SBRA = 0;
    $total_FM = 0;
    // Recopila los valores de las selecciones y suma los puntos
    for ($i = 1; $i <= 4; $i++) {
        $total_FM += (int)$_POST["FM_$i"];
        $total_SBRA += (int)$_POST["SBRA_$i"];
        $total_BCAE += (int)$_POST["BCAE_$i"];
    }

    for ($i = 1; $i <= 8; $i++) {
        $total_MRM += (int)$_POST["MRM_$i"];
    }
    for ($i = 1; $i <= 6; $i++) {
        $total_EATM += (int)$_POST["EATM_$i"];
    }
    
    $conteos_seccion2 = array
    (
    "MRM" => (($total_MRM * 100) / 56),
    "EATM" => (($total_EATM * 100) / 42),
    "BCAE" => (($total_BCAE * 100) / 28),
    "SBRA" => (($total_SBRA * 100) / 28),
    "FM" => (($total_FM * 100) / 28)
    );
    // Encuentra la categoría con el conteo más alto
    $categoria2_maxima = array_keys($conteos_seccion2, max($conteos_seccion2))[0];

    // Define el mensaje basado en la categoría con el conteo más alto
    $quesoy2 = ucfirst($categoria2_maxima);

    // Si hay empates, agrega las categorías al mensaje
    $empates2 = array_filter($conteos_seccion2, function ($conteos2) use ($conteos_seccion2, $categoria2_maxima) {
        return $conteos2 == $conteos_seccion2[$categoria2_maxima];
    });
    if (count($empates2) > 1) {
    $quesoy2 = implode(", ", array_keys($empates2));
}
    // Mostrar el tipo de aprendizaje dominante o los tipos empatados
    echo "Tipo(s) de aprendizaje dominante(s): " . $quesoy2 . "<br>";
    
    // Puedes mostrar los puntos totales o hacer cualquier otra operación aquí
    echo "Puntos totales de FM: $total_FM<br>";
    echo "Puntos totales de SBRA: $total_SBRA<br>";
    echo "Puntos totales de BCAE: $total_BCAE<br>";
    echo "Puntos totales de MRM: $total_MRM<br>";
    echo "Puntos totales de EATM: $total_EATM<br>";
    
    
    //
    
    $total_section3 = 0;
    for ($i = 1; $i <= 15; $i++) {
        $total_section3 += (int)$_POST["pts_$i"];
    }
    
    if($total_section3<=15 and $total_section3>10)
    {
        $quesoy3 = "Muy alto riesgo";
    }
    else if($total_section3<=10 and $total_section3>=6)
    {
        $quesoy3 = "Alto riesgo";
    }
    else if($total_section3<=5 and $total_section3>=3)
    {
        $quesoy3 = "Riesgo moderado";
    }
    else if($total_section3<=2 and $total_section3>0)
    {
        $quesoy3 = "Bajo riesgo";
    }
}
// Mostrar el tipo de aprendizaje dominante o los tipos empatados
    echo "<br>Tipo(s) de aprendizaje dominante(s) sección 3: " . $quesoy3 . "<br>";



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


// Consulta de inserción en la tabla 'TEMO'

$sqlInsercionTemo = "INSERT INTO Temo (Id_Alumno, Motivacion, E_Atribucional, Promedio_Primera_U, Grupo_Temo, Terminado_Temo) VALUES (?, ?, ?, ?, ?, 'SI')";
$stmtInsercionTemo = mysqli_prepare($conexion, $sqlInsercionTemo);
mysqli_stmt_bind_param($stmtInsercionTemo, "issss", $id_alumno, $quesoy, $quesoy2, $quesoy3, $grupo_alumno);
mysqli_stmt_execute($stmtInsercionTemo);
mysqli_stmt_close($stmtInsercionTemo);

if (!$stmtInsercionTemo) {
    die("Error en la consulta de inserción: " . mysqli_error($conexion));
}

// Cerrar la conexión

     mysqli_stmt_close($stmt);
    mysqli_close($conexion);
    
    // Guarda los resultados en un archivo o en una base de datos
    // Puedes usar la opción que prefieras para almacenar los resultados

    // Redirecciona a una página de agradecimiento o resultados
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Test</title>
</head>
<body>
     
    <!-- Botones para mostrar las tablas -->
     <div class="botones-container">
    <button id="mostrarReflexivo">MP</button>
    <button id="mostrarPractico">MR</button>
    <button id="mostrarOrganizado">MS</button>
    <button id="mostrarActivo">Estilos Atribucionales</button>
    <button id="mostrarReferencias">Seccion 3</button>
 </div>
    <!-- Div para mostrar las tablas -->
    <div id="tablaResultado" class="tablaResultado"></div>

    <script>
        // Función para mostrar la tabla del tipo seleccionado
        function mostrarTabla(tipo) {
            let tabla = "";

            // Según el tipo seleccionado, asigna la tabla correspondiente
            switch (tipo) {
                case "Reflexivo":
                    tabla = `
                        <h2>MOTIVACIÓN PROFUNDA</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>MOTIVACIÓN PROFUNDA:</td>
            <td>ESTRATEGIAS:</td>
        </tr>
        <tr>
            <td>Se refiere a la motivación intrinseca, es el alumno que piensa "me satisface estudiar porque siempre descubro algo nuevo, me gusta aprender cosas nuevas para profundizar después en ellas, estudio a fondo los temas que me resultan interesante, pienso que estudiar te ayuda a comprender mejor la vida y la sociedad.  Es un alumno pro-activo, tiende al autoaprendizaje, conoce y controla sus propios procesos cognitivos, seleccciona activamente información y construye con lo que ya tiene; le caracteriza un buen autoconcepto académico, busca "aprender" y no tanto "ejecutar", es curioso, desea dominar el tema y considera la inteligencia como algo modificable y por lo tanto se esfuerza y busca estrategias adecuadas a lo que quiere aprender, es un estilo de aprendizaje adaptativo ya que ante un fracaso busca modificar el "como " (estrategia) y se ajusta a las circunstancias y a la materia.  Utiliza estrategias metacognitivas (planea, controla, evalua). Planea perfeccionar la ejecución.  No tiende a hacer comparaciones.  Considera que el aprendizaje es "modificable" que se puede desarrollar si te esfuerzas y si lo prácticas. </td>
            <td>Vigilar que el alumno continue con ese interes por el estudio, fomentarle siempre relacionar los aprendizajes anteriores con los nuevos adquiridos y la utilidad que les va dar a éstos.</td>
        </tr>
    </table>
                    `;
                    break;
                case "Practico":
                    tabla = `
                        <h2>MOTIVACIÓN RENDIMIENTO</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>MOTIVACIÓN RENDIMIENTO:</td>
            <td>ESTRATEGIAS:</td>
        </tr>
        <tr>
            <td>Denominado "motivación de logro". El alumno piensa "lo importante para mi es conseguir buenas notas en todas las materias, pienso que es siempre importante obtener altas calificaciones, si puedo intentaré sacar mejores notas que la mayoria de mis compañeros/as, tengo buenas cualidades para estudiar. Mide su valía dependiendo de lo que logre, para demostraselo a los demás. Es un alumno que considera la inteligencia como algo NO modificable, por lo tanto si hace más esfuerzo significa que es menos inteligente y prefiere tareas que no impliquen tanto esfuerzo, y que asegure su éxito. El patrón motivacional de éste alumno es "desadaptativo" ya que quiere demostrar su competencia a los demás. Es un estudiante que posee un pobre autoconcepto.  Utiliza mucho la estrategia de "repetición" para alcanzar la meta (pasar el exámen). Siempre pretende obtener comentarios positivos, busca parecer competente.  </td>
            <td>Fomentar que reflexione acerca de "que pasara si no obtengo buenas notas en la clase", indagar en los beneficios que obtiene de tener buenas calificaciones (premios o reconocimientos) y como se sentiría al dejar de obtener estos. Trabajar dinámicas de "tolerancia a la frustración" para que sepa que no siempre va tener el éxito y que eso no implica un "fracaso" sino una nueva oportunidad. </td>
        </tr>
    </table>
                    `;
                    break;
                case "Organizado":
                    tabla = `
                        <h2>MOTIVACIÓN SUPERFICIAL</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>MOTIVACIÓN SUPERFICIAL:</td>
            <td>ESTRATEGIAS:</td>
        </tr>
        <tr>
            <td>También se le conoce como "evitación de fracaso". El alumno tiene una mentalidad de "cuando hago exámenes pienso que me van a salir peor que a mis compañeros/as, me desanimo fácilmente cuando obtengo una baja calificación reconozco que estudio para aprobar, lo que quiero estudiar solamente lo que me van a preguntar en los exámenes.  El estudiante trata de memorizar la información que considera
importante en lugar de buscar el significado global del artículo. Pretende defender su "Yo", su autoestima. Considera que el aprendizaje es "estático" el que es inteligente es inteligente y por eso prefiere enfrentarse a situaciones nuevas y las visualiza como situaciones que lo ponen en riesgo de fracasar. </td>
            <td>Indagar su "miedo al fracaso" trabajar su autoestima, fomentarle seguridad al enfrentarse a un fracaso. Ayudarlo a conocer nuestras estrategias de estudio para que obtenga nuevos éxitos y le permite mejorar su autoconcepto y aumentar su autoeficacia. </td>
        </tr>
    </table>
                    `;
                    break;
                case "Activo":
                    tabla = `
                        <h2>ESTILOS ATRIBUCIONALES (EXPLICACIONES DE LOS RESULTADOS) </h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>MRMPAP (Estilo atribucional de Metas de Rendimiento, Aprendizaje y Esfuerzo)</td>
            <td>Atribuye sus éxitos al esfuerzo y a obtener un aprendizaje, independientemente del número (calificación) "Me esfuerzo en mis estudios porque me resulta útil ver como  me sirve para aprender cosas nuevas, estudio para obtener buenas notas porque es la mejor manera de sobresalir en clase, me esfuerzo en mis estudios porque deseo aumentar mis conocimientos". </td>
        </tr>
        <tr>
            <td>SBRA (Estilo atibucional a la Suerte)</td>
            <td>Considera que el éxito en la vida es por "suerte" y el fracaso por "mala suerte". "Mi fracaso en los exámenes se debe en gran parte a la mala suerte, a veces mis notas me hacen pensar que tengo mala suerte en la vida y especialmente en los exámenes" </td>
        </tr>
        <tr>
            <td>EATM (Estilo atribucional mixto: al profesor, esfuerzo, capacidades)</td>
            <td>Considera que varios factores influyen para tener éxito: la manera de explicar del maestro, al esfuerzo o dedicación a estudiar esa materia, y a la propias cualidades o habilidades del alumno. "Es fácil para mi comprender los contenidos de las materias que tengo que estudiar para obtener buenas notas, las buenas notas se deben siempre a mi capacidad, siempre que estudio lo suficiente, obtengo buenas notas"</td>
        </tr>
        <tr>
            <td>FM/BRA (Estilo atribucional a la Facilidad de las Materias) </td>
            <td>Considera que el éxito en alguna materia es debido a la facilidad de ésta, el mito de la dificultad de las matemáticas. "Mis buenas notas reflejan que algunas materias que tengo son fáciles"</td>
        </tr>
        <tr>
            <td>BCA (Estilo atribucional a la baja capacidad de rendimiento) </td>
            <td>"Cuando tengo malas notas es porque no he estudiado lo suficiente, cuando fracaso en los exámenes se debe a mi baja capacidad, cuando obtengo malas notas pienso que no estoy capacitado para triunfar en esas materias" </td>
        </tr>
    </table>
                    `;
                    break;
                    case "Referencias":
                    tabla = `
                        <h2>Seccion 3</h2>
                        <table border="1"> <!-- Puedes ajustar el atributo border según desees -->
        <tr>
            <td>Muy alto riesgo (15 puntos)</td>
        <tr>
            <td>Alto riesgo (6 a 10 puntos) </td>
        <tr>    
            <td>Riesgo moderado (3 a 5 puntos) </td>
        <tr>    
            <td>Bajo riesgo (0 a 2 puntos) </td>
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