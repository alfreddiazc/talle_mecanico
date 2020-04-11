<?php
include('conexion.php');

	$idRep=$_POST['actuReparacion'];

    $sql= "DELETE FROM reparacion WHERE idReparacion = $idRep";

	mysqli_query($obj_conexion, $sql);

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/eliminarReparacion.html"</script>';
?>
