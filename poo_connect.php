<?php 
$host="localhost";
$root="root";
$pass="";
$db="prueba";

function mysq(){
    global $host;
    global $root;
    global $pass;
    global $db;
$conexion=new mysqli($host,$root,$pass,$db);
/*conexion usando Programacion orientada a objetos */
if($conexion->errno){
 echo "<script> alert('Conexion fallida con mysqli')</script>";
}

else{
    echo "<script> alert('Conexion exitosa con Mysqli orientado a ojetos')</script>";

}

    $conexion->set_charset("utf-8");

    $consulta="select * from login";

    $query=$conexion->query($consulta);

while($ver=$query->fetch_row()){
 echo $ver[0]."&nbsp &nbsp";
 echo $ver[1]."&nbsp &nbsp";
 echo $ver[2]."&nbsp &nbsp";
 echo $ver[3]."&nbsp &nbsp";
 echo "<br>" ;
}
$conexion->close();
}


/* conexion con PDO orientado a objetos */
try{
$connect=new PDO('mysql:host=localhost;dbname=prueba','root',"");
echo"<script>alert('conexion existosa con PDO')</script>";
}
catch(Exception $e){

die('error'.$e->getMessage());
}
?>

