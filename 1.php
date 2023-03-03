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
$dbname = "evaluacion_docente";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Falló la conexión a la base de datos: " . $conn->connect_error);
}


//Se hace la consulta en la base de datos
$sql = "SELECT * FROM e_estud JOIN ae_docente_catedra ON e_estud.DOCUMENTO_DOCENTE = ae_docente_catedra.DOCUMENTO_DOCENTE GROUP BY GRUPO ";
/*$resultado1 = $conexion->prepare($sql);
$resultado1->execute();
$data = $resultado1->fetchAll(PDO::FETCH_ASSOC);

*/
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

print_r($autoevaluacion_completa);


for ($i = 0; $i < count($datos); $i++) {
    
    print_r(array('<br>'.$datos[$i]['GRUPO'].'<br>', $datos[$i]['ENCUESTA'].'<br>', $gestion_asig.'<br>', $ambiente_est.'<br>', $motivacion.'<br>', $evaluacion.'<br>', $comunicacion.'<br>', $promedio_valores.'<br>', $valor_base_porcentaje.'<br>')) . "<br>";

}
