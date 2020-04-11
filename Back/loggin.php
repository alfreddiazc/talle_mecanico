<?php
include('conexion.php');

if ($obj_conexion->connect_error) {
    die("Connection failed: " . $obj_conexion->connect_error);
}

$documento = $_POST['documento'];
$contrasena = $_POST['contrasena'];
$sql = $sql = "SELECT * FROM admin WHERE cedula= '$documento' and contrasena = '$contrasena' ";
$query = query($sql, $obj_conexion);
mysqli_close($obj_conexion);

if ($query->num_rows > 0) {
    while ($row = mysqli_fetch_array($query)) {
        $row = utf8_converter($row);
        if ($row["cedula"] > 0) {
            session_start();
            $_SESSION["usuario"]=$row['cedula'];
            echo '<script language="javascript">window.location="../Front/mbc/index2.html"</script>';
        }
    }
} else {
    echo    "<script language='javascript'>
                window.location='../Front/mbc/loggin.html';
                alert('Contraseña o documento erroneo');
            </script>";
}

//echo '<script language="javascript">window.location="../Front/mbc/registrarCliente.html"</script>';
function query($sql, $obj_conexion)
{
    return mysqli_query($obj_conexion, $sql);
}

function utf8_converter($array)
{
    array_walk_recursive($array, function (&$item, $key) {
        if (!mb_detect_encoding($item, 'utf-8', true)) {
            $item = utf8_encode($item);
        }
    });
    return $array;
}
