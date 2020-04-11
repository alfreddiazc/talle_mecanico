<?php
include('conexion.php');


    $idReparacion=$_POST['actuReparacion'];
	$idEmpleado=$_POST['codTrabajador'];
	$idCliente=$_POST['codCliente'];
	$idAdmin=$_POST['codAdmin'];
	$valorTotal=$_POST['valorReparacion'];
	$descripcion=$_POST['descripcion'];


	mysqli_query($obj_conexion, "UPDATE reparacion SET cliente_id_cliente = $idCliente,
     empleado_id_empleado = $idEmpleado, admin_id_admin = $idAdmin, valor = $valorTotal, descripcion = '$descripcion' WHERE idReparacion = $idReparacion");

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/actualizarReparacion.html"</script>';
