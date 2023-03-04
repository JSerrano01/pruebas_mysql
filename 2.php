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

// Verificar la conexión
if ($conn->connect_error) {
    die("Falló la conexión a la base de datos: " . $conn->connect_error);
}

$query = "SELECT * SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
 
$result = $conn->query("SELECT * FROM `e_estud` ");

$contador = count(mysqli_fetch_assoc($result));

$contador1 = count(mysqli_fetch_array($result));

echo $contador . "<br /><br/>";
echo $contador1 ."<br /><br/>";

$row = mysqli_fetch_array($result);

$row1 = mysqli_fetch_assoc($result);

for ($i = 1 ; $i < $contador; $i++){

   echo $i . "<br>" . $row["PREGUNTA".$i] . "<br /><br/>";

  /* for ($j = 1 ; $j < $contador1; $j++){

    echo $j . "<br>" . $row1["PREGUNTA".$j] . "<br /><br/>";

}
    */

}

if($resultado){

    echo 'Actualizado';

}else{

    echo 'No actualizado';
}

'<br>';



/*
//Se hace la consulta en la base de datos
$query1 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query1_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query1_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query1_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query1_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query2 = "UPDATE e_estud SET PREGUNTA2 = 5 WHERE PREGUNTA2 = 'a. Totalmente de acuerdo'";
$query2_1 = "UPDATE e_estud SET PREGUNTA2 = 4 WHERE PREGUNTA2 = 'b. De acuerdo'";
$query2_2 = "UPDATE e_estud SET PREGUNTA2 = 3 WHERE PREGUNTA2 = 'c. Ni de acuerdo ni en desacuerdo'";
$query2_3 = "UPDATE e_estud SET PREGUNTA2 = 2 WHERE PREGUNTA2 = 'd. En desacuerdo'";
$query2_4 = "UPDATE e_estud SET PREGUNTA2 = 1 WHERE PREGUNTA2 = 'e. Totalmente en desacuerdo'";

$query3 = "UPDATE e_estud SET PREGUNTA3 = 5 WHERE PREGUNTA3 = 'a. Totalmente de acuerdo'";
$query3_1 = "UPDATE e_estud SET PREGUNTA3 = 4 WHERE PREGUNTA3 = 'b. De acuerdo'";
$query3_2 = "UPDATE e_estud SET PREGUNTA3 = 3 WHERE PREGUNTA3= 'c. Ni de acuerdo ni en desacuerdo'";
$query3_3 = "UPDATE e_estud SET PREGUNTA3 = 2 WHERE PREGUNTA3 = 'd. En desacuerdo'";
$query3_4 = "UPDATE e_estud SET PREGUNTA3 = 1 WHERE PREGUNTA3 = 'e. Totalmente en desacuerdo'";

$query4 = "UPDATE e_estud SET PREGUNTA4 = 5 WHERE PREGUNTA4 = 'a. Totalmente de acuerdo'";
$query4_1 = "UPDATE e_estud SET PREGUNTA4 = 4 WHERE PREGUNTA4 = 'b. De acuerdo'";
$query4_2 = "UPDATE e_estud SET PREGUNTA4 = 3 WHERE PREGUNTA4 = 'c. Ni de acuerdo ni en desacuerdo'";
$query4_3 = "UPDATE e_estud SET PREGUNTA4 = 2 WHERE PREGUNTA4 = 'd. En desacuerdo'";
$query4_4 = "UPDATE e_estud SET PREGUNTA4 = 1 WHERE PREGUNTA4 = 'e. Totalmente en desacuerdo'";

$query5 = "UPDATE e_estud SET PREGUNTA5 = 5 WHERE PREGUNTA5 = 'a. Totalmente de acuerdo'";
$query5_1 = "UPDATE e_estud SET PREGUNTA5 = 4 WHERE PREGUNTA5 = 'b. De acuerdo'";
$query5_2 = "UPDATE e_estud SET PREGUNTA5 = 3 WHERE PREGUNTA5 = 'c. Ni de acuerdo ni en desacuerdo'";
$query5_3 = "UPDATE e_estud SET PREGUNTA5 = 2 WHERE PREGUNTA5 = 'd. En desacuerdo'";
$query5_4 = "UPDATE e_estud SET PREGUNTA5 = 1 WHERE PREGUNTA5 = 'e. Totalmente en desacuerdo'";

$query6 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query6_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query6_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query6_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query6_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query7 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query7_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query7_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query7_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query7_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query8 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query8_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query8_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query8_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query8_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query9 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query9_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query9_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query9_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query9_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query10 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query10_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query10_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query10_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query10_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query11 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query11_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query11_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query11_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query11_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query12 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query12_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query12_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query12_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query12_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query13 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query13_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query13_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query13_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query13_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query14 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query14_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query14_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query14_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query14_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query15 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query15_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query15_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query15_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query15_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query16 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query16_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query16_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query16_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query16_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query17 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query17_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query17_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query17_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query17_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query18 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query18_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query18_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query18_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query18_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query19 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query19_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query19_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query19_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query19_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query20 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query20_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query20_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query20_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query20_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query21 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query21_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query21_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query21_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query21_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query22 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query22_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query22_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query22_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query22_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query23 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query23_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query23_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query23_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query23_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query24 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query24_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query24_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query24_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query24_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query25 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query25_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query25_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query25_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query25_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query26 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query26_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query26_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query26_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query26_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query27 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query27_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query27_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query27_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query27_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query28 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query28_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query28_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query28_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query28_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query29 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query29_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query29_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query29_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query29_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query30 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query30_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query30_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query30_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query30_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query31 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query31_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query31_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query31_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query31_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query32 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query32_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query32_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query32_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query32_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query33 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query33_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query33_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query33_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query33_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query34 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query34_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query34_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query34_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query34_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query34 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query34_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query34_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query34_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query34_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query35 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query35_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query35_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query35_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query35_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query36 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query36_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query36_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query36_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query36_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query37 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query37_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query37_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query37_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query37_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query38 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query38_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query38_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query38_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query38_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$query39 = "UPDATE e_estud SET PREGUNTA1 = 5 WHERE PREGUNTA1 = 'a. Totalmente de acuerdo'";
$query39_1 = "UPDATE e_estud SET PREGUNTA1 = 4 WHERE PREGUNTA1 = 'b. De acuerdo'";
$query39_2 = "UPDATE e_estud SET PREGUNTA1 = 3 WHERE PREGUNTA1 = 'c. Ni de acuerdo ni en desacuerdo'";
$query39_3 = "UPDATE e_estud SET PREGUNTA1 = 2 WHERE PREGUNTA1 = 'd. En desacuerdo'";
$query39_4 = "UPDATE e_estud SET PREGUNTA1 = 1 WHERE PREGUNTA1 = 'e. Totalmente en desacuerdo'";

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado2 = mysqli_query($conn, $querypregunta1);
$resultado21 = mysqli_query($conn,$querypregunta1_1);
$resultado22 = mysqli_query($conn,$querypregunta1_2);
$resultado23 = mysqli_query($conn,$querypregunta1_3);
$resultado24 = mysqli_query($conn,$querypregunta1_4);

$resultado3 = mysqli_query($conn, $querypregunta1);
$resultado31 = mysqli_query($conn,$querypregunta1_1);
$resultado32 = mysqli_query($conn,$querypregunta1_2);
$resultado33 = mysqli_query($conn,$querypregunta1_3);
$resultado34 = mysqli_query($conn,$querypregunta1_4);

$resultado4 = mysqli_query($conn, $querypregunta1);
$resultado41 = mysqli_query($conn,$querypregunta1_1);
$resultado42 = mysqli_query($conn,$querypregunta1_2);
$resultado43 = mysqli_query($conn,$querypregunta1_3);
$resultado44 = mysqli_query($conn,$querypregunta1_4);

$resultado5 = mysqli_query($conn, $querypregunta1);
$resultado51 = mysqli_query($conn,$querypregunta1_1);
$resultado52 = mysqli_query($conn,$querypregunta1_2);
$resultado53 = mysqli_query($conn,$querypregunta1_3);
$resultado54 = mysqli_query($conn,$querypregunta1_4);

$resultado6 = mysqli_query($conn, $querypregunta1);
$resultado61 = mysqli_query($conn,$querypregunta1_1);
$resultado62 = mysqli_query($conn,$querypregunta1_2);
$resultado63 = mysqli_query($conn,$querypregunta1_3);
$resultado64 = mysqli_query($conn,$querypregunta1_4);

$resultado7 = mysqli_query($conn, $querypregunta1);
$resultado71 = mysqli_query($conn,$querypregunta1_1);
$resultado72 = mysqli_query($conn,$querypregunta1_2);
$resultado73 = mysqli_query($conn,$querypregunta1_3);
$resultado74 = mysqli_query($conn,$querypregunta1_4);

$resultado8 = mysqli_query($conn, $querypregunta1);
$resultado81 = mysqli_query($conn,$querypregunta1_1);
$resultado82 = mysqli_query($conn,$querypregunta1_2);
$resultado83 = mysqli_query($conn,$querypregunta1_3);
$resultado84 = mysqli_query($conn,$querypregunta1_4);

$resultado9 = mysqli_query($conn, $querypregunta1);
$resultado91 = mysqli_query($conn,$querypregunta1_1);
$resultado92 = mysqli_query($conn,$querypregunta1_2);
$resultado93 = mysqli_query($conn,$querypregunta1_3);
$resultado94 = mysqli_query($conn,$querypregunta1_4);

$resultado10 = mysqli_query($conn, $querypregunta1);
$resultado101 = mysqli_query($conn,$querypregunta1_1);
$resultado102 = mysqli_query($conn,$querypregunta1_2);
$resultado103 = mysqli_query($conn,$querypregunta1_3);
$resultado104 = mysqli_query($conn,$querypregunta1_4);

$resultado11 = mysqli_query($conn, $querypregunta1);
$resultado111 = mysqli_query($conn,$querypregunta1_1);
$resultado112 = mysqli_query($conn,$querypregunta1_2);
$resultado113 = mysqli_query($conn,$querypregunta1_3);
$resultado114 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

$resultado = mysqli_query($conn, $querypregunta1);
$resultado1 = mysqli_query($conn,$querypregunta1_1);
$resultado2 = mysqli_query($conn,$querypregunta1_2);
$resultado3 = mysqli_query($conn,$querypregunta1_3);
$resultado4 = mysqli_query($conn,$querypregunta1_4);

*/




/*
if($resultado){

    echo 'Actualizado';

}else{

    echo 'No actualizado';
}

'<br>';

if($resultado1){

    echo 'Actualizado1';

}else{

    echo 'No actualizado1';
}

'<br>';

if($resultado2){

    echo 'Actualizado2';

}else{

    echo 'No actualizado2';
}

'<br>';

if($resultado3){

    echo 'Actualizado3';

}else{

    echo 'No actualizado3';
}
'<br>';

if($resultado4){

    echo 'Actualizado4';

}else{

    echo 'No actualizado4';
}
*/
?>