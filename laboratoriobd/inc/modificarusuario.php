<?php
  require('conexion.php');

  //$id=$_POST['id'];
  $datoanterior=$_GET['a'];
  $nombre=$_POST['nombre'];
  $correo=$_POST['correo'];

  $consulta="UPDATE usuarios SET nombre='$nombre',correo='$correo' WHERE nombre='$datoanterior'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php"); 
  exit(); 

?>
