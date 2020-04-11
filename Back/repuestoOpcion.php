<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT *  FROM accesorios");

	while($fila = mysqli_fetch_array($seleccion)){

    $rta.='<option value="null">Seleccione un Repuesto</option>'; 		
	$rta.='<option value='.$fila['id_accesorios'].'>'.$fila['nombre'].'</option>';

	}
	echo $rta;


?>