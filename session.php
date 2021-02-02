<?php

include('conexion.php');
$conexion=mysqli_connect($host,$usuario,$contraseña,$nombre_DB);
if(mysqli_connect_errno()){

echo"<script>alert('ERROR  DE CONEXION')</script>";
echo mysqli_connect_errno();
exit();
}
else{
mysqli_set_charset($conexion,"UTF-8");
$sentencia="SELECT * FROM LOGIN";
$preparacion=mysqli_query($conexion,$sentencia);
while($ver_datos=mysqli_fetch_array($preparacion,MYSQLI_BOTH)){

echo $ver_datos['Id']."&nbsp";
echo $ver_datos['Nombre']."&nbsp";
echo $ver_datos['Correo']."&nbsp";
echo $ver_datos['Direccion']."&nbsp";
echo"<br><br>";
}

}

?>