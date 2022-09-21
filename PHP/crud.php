<?php
    include("conexion.php");
    $conn=conectar();

    $sql="SELECT * FROM formulariocontacto";
    $query=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        body > * {
            flex: 1;
        }

       
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <h2 class="redtitle" style="text-align: center">
        CRUD
    </h2>
    <div>
        <a href = "pract2.php" class="btn btn-primary" style="width: 100%" >Formulario</a>
        <a href = "cambios.php" class="btn btn-primary" style="width: 100%" >Listado</a>
        <a href = "cambiosM.php" class="btn btn-primary" style="width: 100%" >Modificar</a>
        <a href = "cambiosB.php" class="btn btn-primary" style="width: 100%" >Eliminar</a>
        <a href = "index.php" class="btn btn-primary" style="width: 100%" >Regresar al CV</a>
        <a href = "cv.xml" class="btn btn-primary" style="width: 100%" >CV en XML</a>
    </div>
</body>
</html>

