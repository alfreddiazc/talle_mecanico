<?php

include('conexion.php');


	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM empleado");
	$rta="";
	$rta.="<thead id=".'empleados'.">";
 
    $rta.="<tr class=".'bg-primary text-black'." align=".'center'." >";
    $rta.="<th scope=".'col'.">Id Empleado</th>";
    $rta.="<th scope=".'col'.">Nombre Empleado</th>";
    $rta.="<th scope=".'col'.">Cedula Empleado</th>";
    $rta.="<th scope=".'col'.">Telefono Empleado</th>";
    $rta.="</tr>";
  	$rta.="</thead>";
  	$rta.="<tbody>";

while($fila = mysqli_fetch_array($seleccion)){

	
    $rta.="<tr>";
    $rta.="<td>".$fila['id_empleado']."</td>";
    $rta.="<td>".$fila['nombre']."</td>";
    $rta.="<td>".$fila['cedula']."</td>";
    $rta.="<td>".$fila['telefono']."</td>";
    $rta.="</tr>";
      	


}
	$rta.="</tbody>";
  

echo $rta;

?>