<?php 

	include('conexion.php');
	include('plantillaPDF.php');


	$idTrabajador=$_POST['trabajadores'];
	$pdf= new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 12);

	$pdf->SetFillColor(232,232,232);

	$pdf->Cell(180,6,"Reporte del Empleado ".nombreTrabajador(),1,1,'C',1);
	$pdf->Cell(30,6,'Id Reparacion',1,0,'C',1);
	$pdf->Cell(60,6,'Descripcion de Reparacion',1,0,'C',1);
	$pdf->Cell(30,6,'Nom Cliente',1,0,'C',1);
	$pdf->Cell(20,6,'Placa',1,0,'C',1);
	$pdf->Cell(40,6,'Valor Reparacion',1,1,'C',1);

	$pdf->SetFont('Arial', '', 10);
	$precioTot=0;

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM reparacion");
	
	while($fila = mysqli_fetch_array($seleccion)){

		if($fila['empleado_id_empleado']==$idTrabajador){

			$pdf->Cell(30,6,$fila['idReparacion'],1,0,'C');
			$pdf->Cell(60,6,$fila['descripcion'],1,0,'C');
			$pdf->Cell(30,6,buscarNomCliente($fila['cliente_id_cliente']),1,0,'C');
			$pdf->Cell(20,6,buscarPlacaAuto($fila['cliente_id_cliente']),1,0,'C');
			$pdf->Cell(40,6,"$".$fila['valor'],1,1,'C');


			$precioTot+=$fila['valor'];
	
		}

		

	}
	

	function nombreTrabajador(){
		include('conexion.php');
		global $idTrabajador;
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM empleado");
	
		while($fila2 = mysqli_fetch_array($seleccion)){

			if($fila2['id_empleado']==$idTrabajador){
				return $fila2['nombre'];
			}

		}
	}

	function buscarNomCliente($idCliente){
		include('conexion.php');
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM cliente");
	
		while($fila2 = mysqli_fetch_array($seleccion)){

			if($fila2['id_cliente']==$idCliente){
				return $fila2['nombre'];
			}

		}
	}

	function buscarPlacaAuto($idCliente){
		include('conexion.php');
		$auto=mysqli_query($obj_conexion,"SELECT * FROM auto");
	
		while($fila2 = mysqli_fetch_array($auto)){

			if($fila2['id_cliente']==$idCliente){
				return $fila2['placa'];
			}

		}
	}

	$pdf->Cell(140,6,'Total Ingresos',1,0,'C');
	$pdf->Cell(40,6,"$".$precioTot,1,1,'C');

	$pdf->Output('D');


?>