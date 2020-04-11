<?php
include('conexion.php');

	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];


	mysqli_query($obj_conexion, "INSERT INTO empleado (cedula,nombre,telefono,admin_id_admin,id_estado,id_trabajos) VALUES (
			'$cedula','$nombre','$telefono',1,1,1)");

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/registrarTrabajador.html"</script>';
?>