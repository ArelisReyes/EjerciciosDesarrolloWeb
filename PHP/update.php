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


$sql="UPDATE formulariocontacto SET  
nombre = '$nombre',
email = '$email',
telefono = '$telefono',
sitioWeb = '$sitioWeb',
asunto = '$asunto',
mensaje = '$mensaje'
WHERE DatosPersonalesID='$DatosPersonalesID'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: cambiosM.php");
    }
?>