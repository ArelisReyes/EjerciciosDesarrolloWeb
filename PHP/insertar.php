<?php
include("conexion.php");
$conn=conectar();

$DatosPersonalesID=$_POST['DatosPersonalesID'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$sitioWeb=$_POST['sitioWeb'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$sql="INSERT INTO formulariocontacto VALUES('$DatosPersonalesID','$nombre','$email','$telefono','$sitioWeb','$asunto','$mensaje')";
$query= mysqli_query($conn,$sql);

if($query){
    Header("Location: cambios.php");
    
}else {
}
?>