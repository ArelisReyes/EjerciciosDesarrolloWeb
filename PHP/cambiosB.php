<?php
    include("conexion.php");
    $conn=conectar();

    $sql="SELECT * FROM formulariocontacto";
    $query=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTROS PARA BORRAR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body > div {
            display: flex;
            flex-direction: column;
        }
        div > a {
            justify-self: center;
            align-self: center;
            flex: 0;
        }
    </style>

</head>
<body>
    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th>DatosPersonalesID</th>
                    <th>nombre</th>
                    <th>email</th>
                    <th>telefono</th>
                    <th>sitioWeb</th>
                    <th>asunto</th>
                    <th>mensaje</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
   
            <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th><?php  echo $row['DatosPersonalesID']?></th> 
                        <th><?php  echo $row['nombre']?></th>
                        <th><?php  echo $row['email']?></th>
                        <th><?php  echo $row['telefono']?></th>
                        <th><?php  echo $row['sitioWeb']?></th>
                        <th><?php  echo $row['asunto']?></th>
                        <th><?php  echo $row['mensaje']?></th>
                        <th><a class="btn btn-primary" href="delete.php?id=<?php echo $row['DatosPersonalesID']?>">Borrar</a></th>   
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <a href="crud.php" class="btn btn-primary">Regresar</a>
    </div>
</body>
</html>
