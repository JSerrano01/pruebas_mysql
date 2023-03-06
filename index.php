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

// Consulta para obtener los datos de la columna y almacenarlos en un arreglo
$sql = "SELECT ID_GRUPO_DOCENTE FROM e_estud";
$result = $conn->query($sql);

$data = array(); // Arreglo para almacenar los datos

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row["ID_GRUPO_DOCENTE"];
  }
}

// Calcular el promedio de los datos en el arreglo
$promedio = 0;

if (count($data) > 0) {
  $promedio = array_sum($data) / count($data);
}

// Mostrar el resultado
echo "El promedio de los datos es: " . $promedio;

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mi página web</title>
</head>
<body>
  <button><a href="2.php">Ir a página 2</a></button>
  <button><a href="1.php">Ir a página 1</a></button>
</body>
</html>
