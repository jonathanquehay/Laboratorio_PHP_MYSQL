<?php
  require('conexion.php');

  $id=$_POST['id'];
  //$datoanterior=$_POST['id'];
  $nombre=$_POST['nombre'];
  $correo=$_POST['correo'];

  //var_dump($_POST);

  $consulta="UPDATE usuarios SET nombre='$nombre',correo='$correo' WHERE id='$id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php");
  exit(); 
  

?>
