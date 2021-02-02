<?php 


$host="localhost";
$root="root";
$pass="";
$db="prueba";

$dato=$_POST['number'];
$conexion=mysqli_connect($host,$root,$pass,$db);

  if(mysqli_connect_errno()){
       echo"error";
       exit();
    }

else{
mysqli_set_charset($conexion,"utf8");
$consulta="SELECT NOMBRE,DIRECCION FROM LOGIN WHERE Id=?";
$preparar=mysqli_prepare($conexion,$consulta);
$union=mysqli_stmt_bind_param($preparar,"i",$dato);
$ejecutar=mysqli_stmt_execute($preparar);
 
if($ejecutar==false){

    echo "error de ejecucion";
}

else{
$resultado=mysqli_stmt_bind_result($preparar,$nombre,$direccion);
echo "Usuarios encontrados:<br>";
while(mysqli_stmt_fetch($preparar)){

echo $nombre."&nbsp".$direccion."<br>";


}



}


}



?>