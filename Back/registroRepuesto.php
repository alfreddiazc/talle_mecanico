<?php
include('conexion.php');

	$nombre=$_POST['nombre'];
	$cantidad=$_POST['cantidad'];
	$valor=$_POST['valor'];
	


	mysqli_query($obj_conexion, "INSERT INTO accesorios (nombre,cantidad,precio) VALUES (
			'$nombre','$cantidad','$valor')");

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/registrarRepuesto.html"</script>';
?>