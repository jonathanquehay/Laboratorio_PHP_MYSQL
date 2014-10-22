<?php
	$mysqli=new mysqli("localhost","root","1234","sistema");

	if(mysqli_connect_errno()){
		echo 'Conexion fallida:', mysqli_connect_error();
		exit();
	}
?>