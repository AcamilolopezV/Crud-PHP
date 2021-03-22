<?php 

  include("conexion.php");
  $con = conectar();

  $sql = "SELECT * FROM usuarios";
  $query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <title>CRUD</title>
</head>
<body>
   <div class="container mt-5">
      <div class="row">
         <div class="col-md-3">
          <form action="insert.php" method="POST">
            <input type="text" class="form-control mb-3" name="id" placeholder="Identificación">
            <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
            <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
            <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
            <input type="mail" class="form-control mb-3" name="correo" placeholder="Correo Electronico">

            <input type="submit" class="btn btn-primary btn-block">
          </form>
         </div>


         <div class="col-md-9">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">Identificación</th>
                <th scope="col" class="text-center">Nombres</th>
                <th scope="col" class="text-center">Apellidos</th>
                <th scope="col" class="text-center">Edad</th>
                <th scope="col" class="text-center">Correo</th>
                <th scope="col" class="text-center"></th>
                <th scope="col" class="text-center"></th>
              </tr>
            </thead>

            <tbody>
              <?php
                //convierto la query en un array con mysqli_fetch_array
                while ($row = mysqli_fetch_array($query)) {
              ?>

              <tr>
                <td class="text-center"><?php echo $row['id'] ?></td>
                <td class="text-center"><?php echo $row['nombres'] ?></td>
                <td class="text-center"><?php echo $row['apellidos'] ?></td>
                <td class="text-center"><?php echo $row['edad'] ?></td>
                <td class="text-center"><?php echo $row['correo'] ?></td>

                <!-- ir a actualizar con una variable que tiene el valor de identificacion -->
                <td><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Editar</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Elminar</a></td>
              </tr>

              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
   </div>
</body>
</html>