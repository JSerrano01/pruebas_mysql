<?php

include_once 'funciones.php';
$funcion = new Functions_Aux();
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evaluacion_docente";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Falló la conexión a la base de datos: " . $conn->connect_error);
}
//Se hace la consulta en la base de datos
$sql = "SELECT * FROM e_estud JOIN ae_docente_catedra ON e_estud.DOCUMENTO_DOCENTE = ae_docente_catedra.DOCUMENTO_DOCENTE ";

$resultado = mysqli_query($conn, $sql);

//Se crea un array y se agregan los datos de la consulta
$datos = array();
while ($fila = mysqli_fetch_array($resultado)) {
    $datos[] = $fila;
}
//Se muestra los datos colocados en cada columna
foreach ($datos as $fila) {
   echo $fila['DOCUMENTO_DOCENTE'] = 43117906 . "<br>", $fila['PREGUNTA1'] . "<br>", $fila['GRUPO'] = "5025 A Ciudadela C4TA" . "<br>". "<br>";
    
}
/*
// Calcular el promedio de los datos en el arreglo
$suma = 0;
$cantidad = count($datos);
foreach ($datos as $fila) {
    $suma += $fila['columna2'];
}
$promedio = $suma / $cantidad;



// Mostrar el resultado
echo "El promedio de las respuestas es: " . $promedio;
*/
//echo ($resultado);

// Cerrar la conexión a la base de datos
