<?php
  require('conexion.php');

  $id=$_GET['id'];


  $consulta="DELETE FROM usuarios WHERE id='$id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php"); 
  exit(); 
?>
