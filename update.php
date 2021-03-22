<?php

  include("conexion.php");
  $con = conectar();

  $id = $_POST['id'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $edad = $_POST['edad'];
  $correo = $_POST['correo'];


  $sql = "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos', edad = '$edad' , correo = '$correo' WHERE id = '$id' ";

  $query = mysqli_query($con, $sql);

  if ($query) {
    Header("Location: index.php");
  }

?>