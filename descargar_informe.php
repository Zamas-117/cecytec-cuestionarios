<?php
session_start();
include('conectarbasededatos.php');

if (isset($_SESSION['maestro_sesion']) && $_SESSION['maestro_sesion'] == true) 
{
    // El maestro no ha iniciado sesión, redirige a la página de inicio de sesión.

    $sql = "SELECT A.Id_Alumno, A.Grupo, A.Nombre_A, T.Motivacion, T.E_Atribucional, T.Promedio_Primera_U, Tea.TEA, Vak.VAK
        FROM Alumno A
        LEFT JOIN Temo T ON A.Id_Alumno = T.Id_Alumno
        LEFT JOIN Tea ON A.Id_Alumno = Tea.Id_Alumno
        LEFT JOIN Vak ON A.Id_Alumno = Vak.Id_Alumno";
    $resultado = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($resultado) > 0) {

        // Crear el archivo Excel y agregar las cabeceras
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Reporte.xls"');
        header('Cache-Control: max-age=0');

        // Agregar las etiquetas HTML para crear la tabla en Excel
        echo '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
        echo '<head>';
        echo '<!--[if gte mso 9]>';
        echo '<xml>';
        echo '<x:ExcelWorkbook>';
        echo '<x:ExcelWorksheets>';
        echo '<x:ExcelWorksheet>';
        echo '<x:Name>Informe Escolar</x:Name>';
        echo '<x:WorksheetOptions>';
        echo '<x:DisplayGridlines/>';
        echo '</x:WorksheetOptions>';
        echo '</x:ExcelWorksheet>';
        echo '</x:ExcelWorksheets>';
        echo '</x:ExcelWorkbook>';
        echo '</xml>';
        echo '<![endif]-->';
        echo '</head>';
        echo '<body>';

        // Crear la tabla en el archivo Excel
echo "<table>";
echo "<tr> <th></th> <th></th> <th></th>
<th>SUPERFICIAL</th> <th>FACILIDAD DE LAS MATERIAS</th> 
<th>ALTO RIESGO</th> <th>AUDITIVO</th> <th>REFLEXIVO</th>
</tr>";
echo "<tr> <th>'#'</th> <th>Grupo</th> <th>Alumno</th>
<th>Motivacion</th> <th>Estilo atribucional</th> 
<th>Promedio 1era unidad</th> <th>test 2 VAK</th> <th>test 3 TEA</th>
</tr>";

// Arreglo para mantener un registro de los alumnos procesados
$alumnos_procesados = array();

// Iterar sobre los resultados y agregar cada fila a la tabla
while ($fila = mysqli_fetch_array($resultado)) {
    // Verificar si el alumno ya ha sido procesado en el mismo grupo
    $clave_procesada = $fila['Nombre_A'] . '_' . $fila['Grupo'];
    if (!in_array($clave_procesada, $alumnos_procesados)) {
        //INSERTAMOS LOS VALORES A LA TABLA EXCEL
        echo "<tr>";
        echo "<td>" . $fila['Id_Alumno']. "</td>";
        echo "<td>" . $fila['Grupo']. "</td>";
        echo "<td>" . $fila['Nombre_A']. "</td>";
        echo "<td>" . ($fila['Motivacion'] ?? ''). "</td>";
        echo "<td>" . ($fila['E_Atribucional'] ?? ''). "</td>";
        echo "<td>" . ($fila['Promedio_Primera_U'] ?? ''). "</td>";
        echo "<td>" . ($fila['VAK'] ?? ''). "</td>";
        echo "<td>" . ($fila['TEA'] ?? ''). "</td>";
        echo "</tr>";
        // Agregar la clave al arreglo de alumnos procesados
        $alumnos_procesados[] = $clave_procesada;
    }
}
echo "</table>";


    }
    
} 
else{
    
    header("Location: maestros_menu.php");
    exit();

}

?>