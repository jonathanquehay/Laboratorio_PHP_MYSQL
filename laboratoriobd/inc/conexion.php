<?php
	$mysqli=new mysqli("localhost","jonathan","","sistema");

	if(mysqli_connect_errno()){
		echo 'Conexion fallida:', mysqli_connect_error();
		exit();
	}
?>