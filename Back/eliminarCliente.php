<?php
include('conexion.php');

	$idCli=$_POST['actuCliente'];
	
	$sql1 = "DELETE FROM auto WHERE id_cliente = $idCli";

	mysqli_query($obj_conexion, $sql1);

	$sql2 = "DELETE FROM cliente WHERE id_cliente = $idCli";

	mysqli_query($obj_conexion, $sql2);

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/eliminarCliente.html"</script>';
?>