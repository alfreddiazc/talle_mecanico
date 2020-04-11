<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT r.idReparacion,r.descripcion,c.nombre as cliente FROM reparacion r inner join cliente c on(r.cliente_id_cliente = c.id_cliente)");

	while($fila = mysqli_fetch_array($seleccion)){

	$rta.='<option value='.$fila['idReparacion'].'>'.$fila['cliente'].'-'.$fila['descripcion'].'</option>';
	

	}
	echo $rta;


?>