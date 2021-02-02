<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4>Ingresa una palabra de acuerodo a la lista</h4>
<ol>

<li>Jabroni</li>
        <li>Consejero de la escuela</li>
        <li>Programador</li>
        <li>Miembro de Bike Gang</li>
        <li>Político</li>
        <li>Rapero</li>
</ol>

<form action="bar.php" method="$_POST">

Ingresa la respuesta:<input type="text" id="res" name="res" require>
<button type="submit">Ingresar</button>
</form>

<?php
$res=$_POST['res'];
$resultado;
switch($res){
case "Consejero de la escuela":
    $resultado="Cualquier cosa con alcohol";
    echo $resultado;
    break;

case"Jabroni":
  $resultado="Patrón Tequila";
  echo $resultado;
        break;
case "Programador":
    $resultado="Cerveza artesanal hipster";
    echo $resultado;
    break;

  case"Miembro de Bike Gang":
    $resultado="Luz de la luna";
    echo $resultado;



}



?>

</body>
</html>