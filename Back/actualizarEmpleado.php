<?php
include('conexion.php');

	$idEmpleado=$_POST['actuTrabajador'];
	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];

    $sql= "UPDATE empleado SET cedula = '$cedula', nombre = '$nombre', telefono = '$telefono' WHERE id_empleado = $idEmpleado";
        

	mysqli_query($obj_conexion, $sql);

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/actualizarTrabajador.html"</script>';
?>
