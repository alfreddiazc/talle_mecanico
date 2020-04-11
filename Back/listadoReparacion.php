<?php

include('conexion.php');

    $sql= "SELECT r.idReparacion,c.nombre as cliente,e.nombre as empleado,r.descripcion,r.valor FROM reparacion r inner join cliente c on(r.cliente_id_cliente = c.id_cliente)
     inner join empleado e on(r.empleado_id_empleado= e.id_empleado)";
	$seleccion=mysqli_query($obj_conexion,$sql);
	$rta="";
	$rta.="<thead id=".'reparacion'.">";
 
    $rta.="<tr class=".'bg-primary text-black'." align=".'center'." >";
    $rta.="<th scope=".'col'.">Id Reparacion</th>";
    $rta.="<th scope=".'col'.">Nombre del Cliente</th>";
    $rta.="<th scope=".'col'.">Nombre del Empleado</th>";
    $rta.="<th scope=".'col'.">Descripcion</th>";
    $rta.="<th scope=".'col'.">Valor</th>";
    $rta.="</tr>";
  	$rta.="</thead>";
  	$rta.="<tbody>";

while($fila = mysqli_fetch_array($seleccion)){

	
    $rta.="<tr>";
    $rta.="<td>".$fila['idReparacion']."</td>";
    $rta.="<td>".$fila['cliente']."</td>";
    $rta.="<td>".$fila['empleado']."</td>";
    $rta.="<td>".$fila['descripcion']."</td>";
    $rta.="<td>".$fila['valor']."</td>";
    $rta.="</tr>";
      	


}
	$rta.="</tbody>";
  

echo $rta;

?>