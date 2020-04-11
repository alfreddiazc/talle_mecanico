<?php

include('conexion.php');


	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM accesorios");
	$rta="";
	$rta.="<thead id=".'repuestos'.">";
 
    $rta.="<tr class=".'bg-primary text-black'." align=".'center'." >";
    $rta.="<th scope=".'col'.">Id Repuesto</th>";
    $rta.="<th scope=".'col'.">Nombre Repuesto</th>";
    $rta.="<th scope=".'col'.">Cantidad Repuesto</th>";
    $rta.="<th scope=".'col'.">Precio Repuesto</th>";
    $rta.="</tr>";
  	$rta.="</thead>";
  	$rta.="<tbody>";

while($fila = mysqli_fetch_array($seleccion)){

	
    $rta.="<tr>";
    $rta.="<td>".$fila['id_accesorios']."</td>";
    $rta.="<td>".$fila['nombre']."</td>";
    $rta.="<td>".$fila['cantidad']."</td>";
    $rta.="<td>"."$".$fila['precio']."</td>";
    $rta.="</tr>";
      	


}
	$rta.="</tbody>";
  

echo $rta;

?>