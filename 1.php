<?php
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

$sql = "SELECT GRUPO FROM e_estud JOIN ae_docente_catedra ON e_estud.DOCUMENTO_DOCENTE = ae_docente_catedra.DOCUMENTO_DOCENTE";

$resultado = mysqli_query($conn, $sql);

$datos = array();
while ($fila = mysqli_fetch_array($resultado)) {
    $datos[] = $fila;
    echo $fila;
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
echo ($resultado);

// Cerrar la conexión a la base de datos

?>
