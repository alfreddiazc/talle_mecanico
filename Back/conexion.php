<?php




$usuario = "root";
$contra = "";
$baseDatos = "tallerapp";
$servidor = "localhost";


/*
$usuario = "bdmcb_user";
$contra = "bdmcb_pass";
$baseDatos = "bdmcb";
$servidor = "localhost";
*/

$obj_conexion = mysqli_connect($servidor, $usuario, $contra, $baseDatos);
if (!$obj_conexion) {
	die("No se pudo realizar la conexion a la BD" . mysqli_connect_error());
}

