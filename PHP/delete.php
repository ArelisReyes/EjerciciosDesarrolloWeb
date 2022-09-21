<?php

include("conexion.php");
$conn=conectar();

$DatosPersonalesID=$_GET['id'];

$sql="DELETE FROM formulariocontacto  WHERE DatosPersonalesID='$DatosPersonalesID'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: cambiosB.php");
    }
?>