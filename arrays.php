<?php
/*Ejercicio de un bucle para array indexado */
$semana=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
  echo "<h1>Los dias de la semana son ".count($semana)."</h1>";
for($i=0;$i<count($semana);$i++){
 $tipo;
    if($i<=4){
      $tipo="dia laboral";

    }
   else{

    $tipo="dia de descanso";
    
    }
  
 echo "$semana[$i] es : $tipo <br>";
}
$suma=array("1",2,"45","array"=>"4");

echo array_sum($suma);
?>