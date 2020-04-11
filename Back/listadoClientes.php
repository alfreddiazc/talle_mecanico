<?php

include('conexion.php');


	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM cliente");
	$rta="";
	$rta.="<thead id=".'clientes'.">";
 
    $rta.="<tr class=".'bg-primary text-black'." align=".'center'." >";
    $rta.="<th scope=".'col'.">Id cliente</th>";
    $rta.="<th scope=".'col'.">Nombre Cliente</th>";
    $rta.="<th scope=".'col'.">Cedula Cliente</th>";
    $rta.="<th scope=".'col'.">Telefono Cliente</th>";
    $rta.="</tr>";
  	$rta.="</thead>";
  	$rta.="<tbody>";

while($fila = mysqli_fetch_array($seleccion)){

	
    $rta.="<tr>";
    $rta.="<td>".$fila['id_cliente']."</td>";
    $rta.="<td>".$fila['nombre']."</td>";
    $rta.="<td>".$fila['cedula']."</td>";
    $rta.="<td>".$fila['telefono']."</td>";
    $rta.="</tr>";
      	


}
	$rta.="</tbody>";
  

echo $rta;

?>