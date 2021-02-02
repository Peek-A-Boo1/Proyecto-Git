<?php

include('conexion.php');
$search=$_POST['number'];

$conexion=mysqli_connect($host,$usuario,$contraseña,$nombre_DB);

if(mysqli_connect_errno()){

 echo"<script>alert('conexion fallida')</script>";
 echo mysqli_connect_errno();
}
else
{
  //Ejemplo de procedimientos almacenadoss//
mysqli_set_charset($conexion,"UTF-8");//esta funcion sirve para poder vizualizar caracteres latinos  en el documento(ñ,acento,etc)//

//primer paso de los P.A:Crear la consulta hacia la base de datos//
$consulta="SELECT Nombre FROM LOGIN WHERE Id=?";
//segundo paso:Preparar la consulta utilizando la variable donde almaceno la conexion y la sentencia sql//
$resultado=mysqli_prepare($conexion,$consulta);
//tercer paso:unir parametros usando la funcion mysqli_stmt_bind_param//
$union=mysqli_stmt_bind_param($resultado,"i",$search);
//cuarto paso:ejecutar el sql utilizando la funcion mysqli_stmt_execute//
$ejecutar=mysqli_stmt_execute($resultado);
 if($ejecutar==false){
echo"<script>alert('la ejecucion fallo')</script>";
  }
else{
//quinto paso:en caso de que la ejecucion fue correcta,se asocian las variables utilizando la funcion mysql_stmt_bind_result//
$asociar=mysqli_stmt_bind_result($resultado,$nombre_user);
echo"Usarios encontrados:<br>";
//secto paso:leer los resultados y mostrarlos usando la funcion mysqli_stmt_fetch//
while(mysqli_stmt_fetch($resultado)){
  echo $nombre_user."<br><br>";
 echo"<a href='index.html'>Regresar?</a>";

}
}
 
}

/*
$nicaragua=array("MADRIZ"=>array("somoto"=>array("sectorA"=>"12","sectorB"=>"14","sectorC"=>"16","sectorD"=>"20","sectorE"=>"15"),
                                 "Palacaguina"=>array("sectorF"=>"uno","sectorG"=>"dos","sectorH"=>"tres","sectorI"=>"cuatro"),
                                  "San Lucas"=>array("sectorJ"=>"cinco","sectorK"=>"seis","sectorL"=>"siete","sectorM"=>"ocho")),

                 "MANAGUA"=>array("Noroeste"=>array("sector"=>"ciudad sandino"),
                                  "NORTE"=>array("sector"=>"Lago xolotlan"),
                                  "SUR"=>array("sector"=>"Ticuantepe"),
                                  "Noreste"=>array("sector"=>"Tipitapa"), 
                                  "Suroeste"=>array("sector"=>"El crucero"),
                                   "Sureste"=>array("sector"=>"Nindiri") )
                                   
                                   
                  
                                );



    
         
        
       

        foreach($nicaragua as $departamento=>$municipio){
    
          echo $departamento. "<br>";
          while(list($sector,$nombre)=each($municipio)){
            echo "$sector=$nombre.<br>";
    
          }
       
        }
        echo"</h3>";



*/

