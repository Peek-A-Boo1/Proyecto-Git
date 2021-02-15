<?php 

/*Variables de conexion*/
$host="localhost";
$root="root";
$pass="";
$db="prueba";
/*Variable super global que envia el dato del formulario html hacia nuestro documento php a travez de la variable $_POST['']*/
$dato=$_POST['number'];

/*Variable que almacena la funcion nativa de la libreria o clase mysql.esta funcion establece una conexion entre 
 una base de datos mysql y nuestra pagina web a travez de  php */
$conexion=mysqli_connect($host,$root,$pass,$db);

  /* esta funcion de la libreria mysqli se activa cuando hay un error en la conexion.Su proposito es capturar el error y 
  ejecutar el codigo del programa*/
  if(mysqli_connect_errno()){
       echo"error";
       exit();
    }

else{
    /*ejecuta caracteres epeciales latinos para que estos puedan ser vizualizdos en el documento html*/
mysqli_set_charset($conexion,"utf8");
$consulta="SELECT NOMBRE,DIRECCION FROM LOGIN WHERE Id=?";
/*Primer paso de la consulta preparada*/
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