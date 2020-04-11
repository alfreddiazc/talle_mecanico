<?php
include('conexion.php');

	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];
	$placa=$_POST['placa'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	
	$sql1 = "INSERT INTO cliente (cedula,nombre,telefono,admin_id_admin) VALUES (
		'$cedula','$nombre','$telefono',1)";

	mysqli_query($obj_conexion, $sql1);

	$idCliente = mysqli_query($obj_conexion, "SELECT MAX(id_cliente) AS id FROM cliente");
	
	if ($row = mysqli_fetch_row($idCliente)) {
	$id = trim($row[0]);
	}

	$sql2 = "INSERT INTO auto (placa,marca,modelo,id_cliente) VALUES (
		'$placa','$marca','$modelo','$id')";

	mysqli_query($obj_conexion, $sql2);

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/registrarCliente.html"</script>';
?>