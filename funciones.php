<?php
Class Functions_Aux{

    public function promedio_valores_preguntas($array_valores, $indice_inicial, $indice_final, $tipo_evaluacion){
        if($tipo_evaluacion === 'aecatedra'){
             $dict = array(
                "Totalmente de acuerdo" => 5,
                "De acuerdo" => 4,
                "Ni de acuerdo ni en desacuerdo" => 3,
                "En desacuerdo" =>2,
                "Totalmente en desacuerdo" =>1
             );
                
        }
        $acum = 0;
        for ($i=$indice_inicial; $i<$indice_final+1; $i++){
            $acum += $dict[$array_valores['PREGUNTA'.+$i]];
        }
        return round($acum/($indice_final-$indice_inicial+1), 2);
    }

/*
    public function promedio_valores_preguntas_est($array_valores1, $tipo_evaluacion){
        if($tipo_evaluacion === 'estud'){
             $dict = array(
                "Totalmente de acuerdo" => 5,
                "De acuerdo" => 4,
                "Ni de acuerdo ni en desacuerdo" => 3,
                "En desacuerdo" =>2,
                "Totalmente en desacuerdo" =>1
             );
                
        }
        $acum = 0;
        for ($i=0; $i<$array_valores1+1; $i++){
            $acum += $dict[$array_valores1['PREGUNTA'.+$i]];
        }
        return round($acum/2);
    }
    */
}
?>