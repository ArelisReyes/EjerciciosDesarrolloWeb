<?php
include("conexion.php");
$conn = conectar();

$DatosPersonalesID = $_GET['id'];

$sql = "SELECT * FROM formulariocontacto WHERE DatosPersonalesID='$DatosPersonalesID'";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Actualizar Datos</title>
</head>

<body>
    <form action="update.php" method="POST">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-6 contorno">
          <br />
          <h1 class="rosa" style="text-align: center">
            Formulario de contacto
          </h1>
          <br />
          <div style="text-align: center; font-size:15px;">
            <b>Escribenos y en breve nos pondremos en contacto contigo</b>
          </div>
          <br />
            <div class="form-group">
              <label for="nombre"><b>DatosPersonalesID</label
              ><label class="rosa">*</b></label>
              <input
                type="hidden"
                class="form-control borde"
                id="DatosPersonalesID"
                name="DatosPersonalesID"
                value="<?php echo $row['DatosPersonalesID']; ?>"
              />
            <div class="form-group">
              <label for="nombre"><b>Nombre</label>
              <label class="rosa">*</b></label>
              <input
                type="text"
                class="form-control borde"
                id="nombre"
                name="nombre"
                value="<?php echo $row['nombre']; ?>"
                placeholder="Nombre"
              />
            </div>
            <br />
            <div class="form-group">
              <label for="email"><b>Email</label
              ><label class="rosa">*</b></label>
              <input
                type="email"
                class="form-control borde"
                id="email"
                name="email"
                value="<?php echo $row['email']; ?>"
                placeholder="Email"
              />
            </div>
            <br />
            <div class="form-group">
              <label for="telefono"><b>Telefono</b></label>
              <input
                type="number"
                class="form-control borde"
                id="telefono"
                name="telefono"
                value="<?php echo $row['telefono']; ?>"
                placeholder="Telefono"
              />
            </div>
            <br />
            <div class="form-group">
              <label for="sitio"><b>Sitio web</b></label>
              <input
                type="text"
                class="form-control borde"
                id="sitioWeb"
                name="sitioWeb"
                value="<?php echo $row['sitioWeb']; ?>"
                
                placeholder="Sitio"
              />
            </div>
            <br />
            <div class="form-group">
              <label for="asunto"><b>Asunto</label
              ><label class="rosa">*</b></label>
              <input
                type="text"
                class="form-control borde"
                id="asunto"
                name="asunto"
                value="<?php echo $row['asunto']; ?>"
              />
            </div>
            <br />
            <div class="form-group">
              <label for="mensaje"><b>Mensaje</label
              ><label class="rosa">*</b></label>
              <input
                type="text"
                class="form-control borde"
                id="mensaje"
                name="mensaje"
                value="<?php echo $row['mensaje'];?>"
              ></input>
            </div>

            <br />
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btnrosa">
                Enviar
              </button>
            </div>
            <div>
              <label class="rosa" name="actualizar"><b>*</b></label>
              <label><b>los campos son obligatorios.</b></label>
            </div>
            <br />
          </form>
        </div>
      </div>
    </div>

</body>
</html>