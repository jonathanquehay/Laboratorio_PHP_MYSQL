<?php
  require('conexion.php');

  $nombre=$_POST['nombre'];
  $correo=$_POST['correo'];

  $consulta="INSERT INTO usuarios(nombre,correo) VALUES ('$nombre','$correo')";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php"); 
  exit(); 

?>

