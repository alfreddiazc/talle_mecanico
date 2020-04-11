<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM admin");

	while($fila = mysqli_fetch_array($seleccion)){

	$rta.='<option value='.$fila['id_admin'].'>'.$fila['nombre'].'</option>';
	

	}
	echo $rta;


?>