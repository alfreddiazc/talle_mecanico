<?php
include('conexion.php');

    $idRepuesto=$_POST['actuRepuesto'];
	$nombre=$_POST['nombre'];
	$cantidad=$_POST['cantidad'];
	$valor=$_POST['valor'];
	
	mysqli_query($obj_conexion, "UPDATE accesorios SET nombre = '$nombre', cantidad = $cantidad, precio = $valor WHERE id_accesorios = $idRepuesto");

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/actualizarRepuestos.html"</script>';
?>