<?php
include('conexion.php');

    $idRep=$_POST['actuRepuesto'];

    $sql= "DELETE FROM accesorios WHERE id_accesorios = $idRep";

	mysqli_query($obj_conexion, $sql);

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../Front/mbc/eliminarRepuestos.html"</script>';
?>
