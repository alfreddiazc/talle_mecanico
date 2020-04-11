<?php
include('conexion.php');

	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];
	$placa=$_POST['placa'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$idCli=$_POST['actuCliente'];
	
	$sql1 = "UPDATE cliente SET cedula = '$cedula', nombre = '$nombre', telefono = '$telefono' WHERE id_cliente = $idCli";

	mysqli_query($obj_conexion, $sql1);

	$sql2 = "UPDATE auto SET placa = '$placa', marca = '$marca', modelo = '$modelo' WHERE id_cliente = $idCli";

	mysqli_query($obj_conexion, $sql2);

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/actualizarCliente.html"</script>';
?>