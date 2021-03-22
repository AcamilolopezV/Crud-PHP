<?php

  include("conexion.php");
  $con = conectar();

  //tomo el dato por get por que viene por url
  $id = $_GET['id'];

  $sql = "SELECT * FROM usuarios WHERE id = '$id' ";
  $query = mysqli_query($con, $sql);

  //paso la consulta a un array
  $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Actualizar</title>
</head>

<body>
  <div class="container mt-5">
    <form action="update.php" method="POST">

      <input type="hidden" name="id" value="<?php echo $row['id']?>">
      
      <input type="text" class="form-control mb-3" name="nombres" value="<?php echo $row['nombres']?>" >
      <input type="text" class="form-control mb-3" name="apellidos" value="<?php echo $row['apellidos']?>">
      <input type="text" class="form-control mb-3" name="edad" value="<?php echo $row['edad']?>">
      <input type="mail" class="form-control mb-3" name="correo" value="<?php echo $row['correo']?>">

      <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>
  </div>
</body>

</html>