<?php

include("conexion.php");
$con = conectar();

//recibimos los datos del formulario
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];


//query de insertar
$sql = "INSERT INTO usuarios VALUES('$id' , '$nombres' , '$apellidos' , '$edad' , '$correo')";

// tomar la consulta y ejecutarla
$query = mysqli_query($con , $sql);

//si la query se ejecuta correctamente que nos devuelva a index.php
if ($query) {
  Header("Location: index.php");
}

