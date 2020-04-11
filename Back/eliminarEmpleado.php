<?php
include('conexion.php');

	$idEmpleado=$_POST['actuTrabajador'];

    $sql= "DELETE FROM empleado WHERE id_empleado = $idEmpleado";

	mysqli_query($obj_conexion, $sql);

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/eliminarTrabajador.html"</script>';
?>
