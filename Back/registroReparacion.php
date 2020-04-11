<?php
include('conexion.php');

	$idEmpleado=$_POST['codTrabajador'];
	$idCliente=$_POST['codCliente'];
	$idAdmin=$_POST['codAdmin'];
	$valorTotal=$_POST['valorReparacion'];
	$descripcion=$_POST['descripcion'];


	mysqli_query($obj_conexion, "INSERT INTO reparacion (cliente_id_cliente,empleado_id_empleado,admin_id_admin,valor,descripcion) VALUES (
			'$idCliente','$idEmpleado','$idAdmin','$valorTotal','$descripcion')");

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/registrarReparacion.html"</script>';
?>