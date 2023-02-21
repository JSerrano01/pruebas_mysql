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
//$sql = "SELECT GRUPO, COUNT(GRUPO) as COUNT_ENC, ENCUESTA, PREGUNTA1, PREGUNTA2, PREGUNTA3, PREGUNTA4, PREGUNTA5, PREGUNTA6, PREGUNTA7, PREGUNTA8, PREGUNTA9, PREGUNTA10, PREGUNTA11, PREGUNTA12, PREGUNTA13, PRREGUNTA14, PREGUNTA15, PREGUNTA16, PREGUNTA17, PREGUNTA18, PREGUNTA19, PREGUNTA20, PREGUNTA21, PREGUNTA22, PREGUNTA23, PREGUNTA24, PREGUNTA25, PREGUNTA26, PREGUNTA27, PREGUNTA28, PREGUNTA29, PREGUNTA30, PREGUNTA31, PREGUNTA32, PREGUNTA33, PREGUNTA34, PREGUNTA35, PREGUNTA36, PREGUNTA37, PREGUNTA38, PREGUNTA39 from e_estud WHERE DOCUMENTO_DOCENTE = :documento";
$sql = "SELECT ID_GRUPO_DOCENTE FROM e_estud WHERE DOCUMENTO_DOCENTE = DOCUMENTO_DOCENTE FROM ae_docente_catedra";
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

/*
    $resultado_aecatedra = $conexion->prepare($query_aecatedra);
    $resultado_aecatedra->execute();
    $data_aecatedra=$resultado_aecatedra->fetchAll(PDO::FETCH_ASSOC);
   
    //se debe setear SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
    
    $query_eval_estudiantes= "SELECT GRUPO, COUNT(GRUPO) as COUNT_ENC, ENCUESTA, PREGUNTA1, PREGUNTA2, PREGUNTA3, PREGUNTA4, PREGUNTA5, PREGUNTA6, PREGUNTA7, PREGUNTA8, PREGUNTA9, PREGUNTA10, PREGUNTA11, PREGUNTA12, PREGUNTA13, PRREGUNTA14, PREGUNTA15, PREGUNTA16, PREGUNTA17, PREGUNTA18, PREGUNTA19, PREGUNTA20, PREGUNTA21, PREGUNTA22, PREGUNTA23, PREGUNTA24, PREGUNTA25, PREGUNTA26, PREGUNTA27, PREGUNTA28, PREGUNTA29, PREGUNTA30, PREGUNTA31, PREGUNTA32, PREGUNTA33, PREGUNTA34, PREGUNTA35, PREGUNTA36, PREGUNTA37, PREGUNTA38, PREGUNTA39 from e_estud WHERE DOCUMENTO_DOCENTE = :documento";
    $resultado_evalestud = $conexion->prepare($query_eval_estudiantes);
    $resultado_evalestud->execute([':documento' => $data_aecatedra[0]['DOCUMENTO_DOCENTE']]);
    $data_estudiantes=$resultado_evalestud->fetchAll(PDO::FETCH_ASSOC);

    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->SetTopMargin(0);
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', '15');
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(0, 8, utf8_decode('CASO 1: DOCENTE COMÚN'), 1, 1,'C', true);
    $pdf->Ln(1);
    $pdf->Rect(10,30,190,35);
    $pdf->SetCol(0);
    $pdf->SetLeftMargin(12);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(0, 10, utf8_decode('INSTITUCIÓN UNIVERSITARIA COLEGIO MAYOR DE ANTIOQUIA'), 0, 0,'');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', '9');
    //para extraer el periodo completo del reporte
    $referencia_encuesta = explode("-", $data_aecatedra[0]['ENCUESTA']);
    $periodo_encuesta = $referencia_encuesta[1]. "-" . $referencia_encuesta[2];
    $pdf->Cell(0, 10, utf8_decode('EVALUACIÓN DE DESEMPEÑO PARA EL PERIODO: '.$periodo_encuesta), 0, 0,'');
    $pdf->Ln();
    $pdf->Cell(40, 10, utf8_decode('NOMBRE DEL DOCENTE: '), 0, 0,'');
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(50, 10, utf8_decode($data_aecatedra[0]['NOMBRE_DOCENTE']), 0, 0,'');
    $pdf->Ln(4);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(40, 10, utf8_decode('CARGO: '), 0, 0,'');
    $pdf->Cell(-25);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(50, 10, utf8_decode($data_aecatedra[0]['CARGO_DOCENTE']), 0, 0,'L');
    $pdf->Ln(4);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(40, 10, utf8_decode('IDENTIFICACIÓN: '), 0, 0,'');
    $pdf->Cell(-12);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(50, 10, utf8_decode($data_aecatedra[0]['DOCUMENTO_DOCENTE']), 0, 0,'L');
    $pdf->Ln();
    $pdf->SetCol(0);
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(0, 8, utf8_decode('EVALUACIÓN POR PARTE DEL DECANO (40%)'), 1, 1,'C', true);
    $pdf->Ln(2);
    $pdf->Rect(10,77,190,35);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->SetCol(0);
    $pdf->SetLeftMargin(12);
    $pdf->Cell(40, 10, utf8_decode('EVALUADOR: '), 0, 0,'');
    $pdf->Cell(-18);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(50, 10, utf8_decode($data_aecatedra[79]['NOMBRE_DOCENTE']), 0, 0,'');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(40, 0, utf8_decode('DOCENTE: '), 0, 0,'');
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(-18);
    $pdf->Cell(50, 0, utf8_decode($data_aecatedra[0]['NOMBRE_DOCENTE']), 0, 0,'');
    $pdf->SetCol(1.3);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(40, -10, utf8_decode('DEP. DEL EVALUADOR: '), 0, 0,'R');
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(50, -10, utf8_decode($data_aecatedra[0]['FACULTAD']), 0, 0,'');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(40, 20, utf8_decode('DEP. DEL DOCENTE: '), 0, 0,'R');
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(50, 20, utf8_decode($data_aecatedra[0]['NOMBRE_DOCENTE']), 0, 0,'');
    $pdf->SetCol(0.5);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(30, 30, utf8_decode('TIPO DOCENTE: '), 0, 0,'');
    $pdf->Cell(-1);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(30, 30, utf8_decode($data_aecatedra[0]['CARGO_DOCENTE']), 0, 0,'');
    $pdf->SetCol(0.5);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(30, 40, utf8_decode('TOTAL: '), 0, 0,'');
    $pdf->Cell(-15);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(40, 40, utf8_decode($data_aecatedra[0]['CARGO_DOCENTE']), 0, 0,'');
    $pdf->SetCol(0.5);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(30, 50, utf8_decode('VALOR: '), 0, 0,'');
    $pdf->Cell(-15);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(40, 50, utf8_decode($data_aecatedra[0]['CARGO_DOCENTE']), 0, 0,'');
    $pdf->SetCol(1);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(30, 60, utf8_decode('FECHA: '), 0, 0,'');
    $pdf->Cell(-15);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(40, 60, utf8_decode($data_aecatedra[0]['FECHA_DILIGENCIAMIENTO']), 0, 0,'');
    $pdf->SetCol(0);
    $pdf->SetFont('Arial', 'B', '9');
    $pdf->Cell(40, 80, utf8_decode('VALOR FINAL: '), 0, 0,'');
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(-15);
    $pdf->SetFont('Arial', '', '9');
    $pdf->Cell(40, 80, utf8_decode($data_aecatedra[0]['CARGO_DOCENTE'].' ('.$data_aecatedra[0]['CARGO_DOCENTE'].')'), 0, 0,'');
    $pdf->SetCol(0);
    $pdf->Ln(45);
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(0, 8, utf8_decode('AUTOEVALUACIÓN DEL DOCENTE (20%)'), 1, 0,'C', true);
    $pdf->Ln();
    $header = array('Encuesta', 'Dominio de la disciplina', 'Gestión de la Asignatura', 'Ambientes y Estrategias de Aprendizaje', 'Motivación', 'Evaluación', 'Comunicación y Relación con los estudiantes', 'TOTAL', 'VALOR');
    $pdf->SetFont('Arial', 'B', '8');
    $pdf->SetWidths(array(30, 15, 21, 25, 18, 18, 25, 18, 25, 12, 12));
    $pdf->Row($header);
    
    //suma de primer factor a evaluar - Dominio disciplina
    $dominio_disc = $funcion->promedio_valores_preguntas($data_aecatedra[0], 1, 6, 'aecatedra');
    //suma de segundo factor a evaluar - Gestión de la asignatura
    $gestion_asig = $funcion->promedio_valores_preguntas($data_aecatedra[0], 7, 10, 'aecatedra');
    //suma de segundo factor a evaluar - Ambiente y estrategias
    $ambiente_est = $funcion->promedio_valores_preguntas($data_aecatedra[0], 11, 15, 'aecatedra');
    //suma de segundo factor a evaluar - Motivación
    $motivacion = $funcion->promedio_valores_preguntas($data_aecatedra[0], 16, 20, 'aecatedra');
    //suma de segundo factor a evaluar - Evaluacion
    $evaluacion = $funcion->promedio_valores_preguntas($data_aecatedra[0], 21, 26, 'aecatedra');
    //suma de segundo factor a evaluar - Comunicación
    $comunicacion = $funcion->promedio_valores_preguntas($data_aecatedra[0], 27, 31, 'aecatedra');
    $valores= array($dominio_disc, $gestion_asig, $ambiente_est, $motivacion, $evaluacion, $comunicacion);
    $promedio_valores = round(array_sum($valores)/count($valores), 2);
    $valor_base_porcentaje = $promedio_valores * 0.2;
    $autoevaluacion_completa = array($data_aecatedra[0]['ENCUESTA'], strval($dominio_disc), $gestion_asig, $ambiente_est, $motivacion, $evaluacion, $comunicacion, $promedio_valores, $valor_base_porcentaje);
    
    $pdf->SetFont('Arial', '', '8');
    $pdf->Row($autoevaluacion_completa);
    
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(0, 8, utf8_decode('EVALUACIÓN POR PARTE DE ESTUDIANTES (40%)'), 1, 0,'C', true);
    $pdf->Ln();
    $header = array('Grupo', 'Encuesta', 'Encuestas diligenciadas', 'Gestión de la Asignatura', 'Ambientes y Estrategias de Aprendizaje', 'Motivación', 'Evaluación', 'Comunicación y Relación con los estudiantes', 'TOTAL', 'VALOR');
    $pdf->SetFont('Arial', 'B', '8');
    $pdf->SetWidths(array(20, 15, 21, 18, 25, 18, 18, 25, 18, 12));
    $pdf->Row($header);
    $pdf->Ln();
    $pdf->SetFont('Arial', '', '8');
    $pdf->SetWidths(array(20, 15, 21, 18, 25, 18, 18, 25, 18, 12));

    
    $sql = "SELECT PREGUNTA1 FROM e_estud WHERE ID_GRUPO_DOCENTE = documento";
    $result = mysqli_query($conn, $sql);

    // Almacenar los datos de la columna en un array
    $columna_array = array();
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $columna_array[] = $row["e_estud"];
    }

}


    for($i=0;$i<count($data_estudiantes);$i++){
    $pdf->Row(array($data_estudiantes[$i]['GRUPO'], $data_estudiantes[$i]['ENCUESTA'], $data_estudiantes[$i]['COUNT_ENC'], $data_estudiantes[$i]['PREGUNTA1']));
    
        $acum=0;

        for($j=16;$j<=49;$j++){
            $pdf->Row(array($data_estudiantes[$j]['GRUPO'], $data_estudiantes[$j]['ENCUESTA'], $data_estudiantes[$j]['COUNT_ENC'], $data_estudiantes[$j]['PREGUNTA1'],$data_estudiantes[$j]['PREGUNTA2'],$data_estudiantes[$j]['PREGUNTA3'],$data_estudiantes[$j]['PREGUNTA4'],$data_estudiantes[$j]['PREGUNTA5'],$data_estudiantes[$j]['PREGUNTA6'],$data_estudiantes[$j]['PREGUNTA7'],$data_estudiantes[$j]['PREGUNTA8'],$data_estudiantes[$j]['PREGUNTA9'],$data_estudiantes[$j]['PREGUNTA10'],$data_estudiantes[$j]['PREGUNTA11'],$data_estudiantes[$j]['PREGUNTA12'],$data_estudiantes[$j]['PREGUNTA13'],$data_estudiantes[$j]['PREGUNTA14'],$data_estudiantes[$j]['PREGUNTA15'],$data_estudiantes[$j]['PREGUNTA16'],$data_estudiantes[$j]['PREGUNTA17'],$data_estudiantes[$j]['PREGUNTA18'],$data_estudiantes[$j]['PREGUNTA19'],$data_estudiantes[$j]['PREGUNTA20'],$data_estudiantes[$j]['PREGUNTA21'],$data_estudiantes[$j]['PREGUNTA22'],$data_estudiantes[$j]['PREGUNTA23'],$data_estudiantes[$j]['PREGUNTA24'],$data_estudiantes[$j]['PREGUNTA25'],$data_estudiantes[$j]['PREGUNTA26'],$data_estudiantes[$j]['PREGUNTA27'],$data_estudiantes[$j]['PREGUNTA28'],$data_estudiantes[$j]['PREGUNTA29'],$data_estudiantes[$j]['PREGUNTA30'],$data_estudiantes[$j]['PREGUNTA31'],$data_estudiantes[$j]['PREGUNTA32'],$data_estudiantes[$j]['PREGUNTA33'],$data_estudiantes[$j]['PREGUNTA34'],$data_estudiantes[$j]['PREGUNTA35'],$data_estudiantes[$j]['PREGUNTA36'],$data_estudiantes[$j]['PREGUNTA37'],$data_estudiantes[$j]['PREGUNTA38'],$data_estudiantes[$j]['PREGUNTA39']));
        }
    
    }


    $pdf->Output(); */
?>

