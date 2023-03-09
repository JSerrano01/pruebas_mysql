<?php

include_once 'funciones.php';
//include_once 'conexion.php';
$funcion = new Functions_Aux();
//$objeto = new Conexion();
//$objeto = new Conexion();
//$conexion = $objeto->Conectar();
// Conexión a la base de datos

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evaluacion_docente1";

$conn = new mysqli($servername, $username, $password, $dbname);

$pdo = new PDO('mysql:host=localhost;dbname=evaluacion_docente1', 'root', '');

$sql = "SELECT DOCUMENTO_DOCENTE, GRUPO,(PREGUNTA1 + PREGUNTA4 + PREGUNTA5) / 3 AS promedio FROM e_estud WHERE DOCUMENTO_DOCENTE = 43117906 GROUP BY GRUPO ORDER BY GRUPO ";
$stmt = $pdo->query($sql);
$resultados = $stmt->fetchAll();


// Verificar la conexión
if ($conn->connect_error) {
    die("Falló la conexión a la base de datos: " . $conn->connect_error);
}


//Se hace la consulta en la base de datos
$sql = "SELECT * FROM e_estud JOIN ae_docente_catedra ON e_estud.DOCUMENTO_DOCENTE = ae_docente_catedra.DOCUMENTO_DOCENTE GROUP BY GRUPO ";

$sql1 = "SELECT DOCUMENTO_DOCENTE, GRUPO,(PREGUNTA1 + PREGUNTA4 + PREGUNTA5) / 3 AS promedio, (PREGUNTA6 + PREGUNTA7 + PREGUNTA8) / 3 AS pr FROM e_estud WHERE DOCUMENTO_DOCENTE = 43117906 GROUP BY GRUPO ORDER BY GRUPO ";



/*$resultado1 = $conexion->prepare($sql);
$resultado1->execute();
$data = $resultado1->fetchAll(PDO::FETCH_ASSOC);

*/

$result = mysqli_query($conn,$sql1);

/*$data = array();
while ($files = mysqli_fetch_array($result)) {
    $data[] = $files;
}
*/
/*

for ($i = 0; $i < count($data); $i++) {
    
    print_r(array('<br>'.$data[$i]['GRUPO'].'<br>', $data[$i]['DOCUMENTO_DOCENTE'].'<br>', $data[$i]['promedio'].'<br>' . '<br>' , $ambiente_est.'<br>', $motivacion.'<br>', $evaluacion.'<br>', $comunicacion.'<br>', $promedio_valores.'<br>', $valor_base_porcentaje.'<br>')) . "<br>";



}
*/

$resultado = $conn->query("SELECT  GRUPO, COUNT(GRUPO) as COUNT_ENC, ENCUESTA, AVG(ROUND(((PREGUNTA1 + PREGUNTA4 + PREGUNTA5 + PREGUNTA6 + PREGUNTA7+ PREGUNTA8+ PREGUNTA9+ PREGUNTA10+ PREGUNTA11) / 9),1) AS gestion_asig, ROUND(((PREGUNTA12 + PREGUNTA13 + PREGUNTA14 + PREGUNTA15) / 4) ,1) AS ambiente_asig, ROUND(((PREGUNTA16 + PREGUNTA17 + PREGUNTA18 + PREGUNTA19 + PREGUNTA20) / 5),1) AS motivacion_asig, ROUND(((PREGUNTA21 + PREGUNTA22 + PREGUNTA23 + PREGUNTA24 + PREGUNTA25) / 5),1) AS evaluacion_asig, ROUND(((PREGUNTA26 + PREGUNTA27 + PREGUNTA28 + PREGUNTA29 + PREGUNTA30 + PREGUNTA31 + PREGUNTA32 + PREGUNTA33 + PREGUNTA34 + PREGUNTA35 + PREGUNTA36 + PREGUNTA37 + PREGUNTA38 + PREGUNTA39) / 14),1) AS comunicacion_asig) AS promedioo FROM e_estud WHERE DOCUMENTO_DOCENTE = :documento GROUP BY GRUPO");
$fila = $resultado->fetch_all();
$promedio1 = $fila["gestion_asig"];
$promedio2 = $fila["ambiente_asig"];
$promedio3 = $fila["motivacion_asig"];
$promedio4 = $fila["evaluacion_asig"];
$promedio5 = $fila["comunicacion_asig"];

$promedio = ($promedio1 + $promedio2 + $promedio3 + $promedio4 + $promedio5 ) / 5;

echo "El promedio entre los valores es: " . $promedio;




// Conexión a la base de datos
//$conn = mysqli_connect("localhost", "usuario", "contraseña", "basedatos");

// Consulta
//$sql = "SELECT columna1, columna2, columna3 FROM tabla";
//$resultado = mysqli_query($conn, $sql);





/*
$resultado = mysqli_query($conn, $sql);

//Se crea un array y se agregan los datos de la consulta
$datos = array();
while ($fila = mysqli_fetch_array($resultado)) {
    $datos[] = $fila;
}
//suma de primer factor a evaluar - Dominio disciplina
$dominio_disc = $funcion->promedio_valores_preguntas($datos[0], 1, 6, 'aecatedra');
//suma de segundo factor a evaluar - Gestión de la asignatura
$gestion_asig = $funcion->promedio_valores_preguntas($datos[0], 7, 10, 'aecatedra');
//suma de tercer factor a evaluar - Ambiente y estrategias
$ambiente_est = $funcion->promedio_valores_preguntas($datos[0], 11, 15, 'aecatedra');
//suma de cuarto factor a evaluar - Motivación
$motivacion = $funcion->promedio_valores_preguntas($datos[0], 16, 20, 'aecatedra');
//suma de quinto factor a evaluar - Evaluacion
$evaluacion = $funcion->promedio_valores_preguntas($datos[0], 21, 26, 'aecatedra');
//suma de sexto factor a evaluar - Comunicación
$comunicacion = $funcion->promedio_valores_preguntas($datos[0], 27, 31, 'aecatedra');
$valores = array($dominio_disc, $gestion_asig, $ambiente_est, $motivacion, $evaluacion, $comunicacion);
$promedio_valores = round(array_sum($valores) / count($valores), 2);
$valor_base_porcentaje = $promedio_valores * 0.2;
$autoevaluacion_completa = array('<br>'.$datos[0]['ENCUESTA'].'<br>', strval($dominio_disc) .'<br>', $gestion_asig . '<br>', $ambiente_est . '<br>', $motivacion . '<br>', $evaluacion . '<br>', $comunicacion . '<br>', $promedio_valores . '<br>', $valor_base_porcentaje . '<br>');


$dominio_disc = $sql1;


print_r($autoevaluacion_completa);


for ($i = 0; $i < count($datos); $i++) {
    
    print_r(array('<br>'.$datos[$i]['GRUPO'].'<br>', $datos[$i]['ENCUESTA'].'<br>', $gestion_asig.'<br>', $ambiente_est.'<br>', $motivacion.'<br>', $evaluacion.'<br>', $comunicacion.'<br>', $promedio_valores.'<br>', $valor_base_porcentaje.'<br>')) . "<br>";

    print_r();

}
*/
?>