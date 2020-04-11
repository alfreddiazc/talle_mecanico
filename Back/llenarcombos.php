<?php
include('conexion.php');


if (isset($_GET['mode'])) {
    
    if ($_GET['mode'] == "actuCliente") {
        
        $resultado = Array();
        $consulta = " SELECT * from cliente ";
        $query = mysqli_query($obj_conexion, $consulta);
        mysqli_close($obj_conexion);

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                
                array_walk_recursive($row, function (&$item, $key) {
                    if (!mb_detect_encoding($item, 'utf-8', true)) {
                        $item = utf8_encode($item);
                    }
                });
                
                $arr = array("idC" => $row["id_cliente"],
                             "nombre" => $row["nombre"]);
                array_push($array, $arr);
            }

            $response= $array;
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los proyectos.");
        }
        
        $rta      = "";
        $rta .= '<option value="null">SELECCIONE UN CLIENTE</option>';

        foreach ($response as $key) {
            $rta .= '<option value="' . $key["idC"] . '">' . $key["nombre"] . '</option> ';
        }

        echo $rta;    
        
    }else if ($_GET['mode'] == "actuTrabajador") {

        $resultado = Array();
        $consulta = " SELECT * from empleado ";
        $query = mysqli_query($obj_conexion, $consulta);
        mysqli_close($obj_conexion);

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                
                array_walk_recursive($row, function (&$item, $key) {
                    if (!mb_detect_encoding($item, 'utf-8', true)) {
                        $item = utf8_encode($item);
                    }
                });
                
                $arr = array("idE" => $row["id_empleado"],
                             "nombre" => $row["nombre"]);
                array_push($array, $arr);
            }

            $response= $array;
        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los proyectos.");
        }
        
        $rta      = "";
        $rta .= '<option value="null">SELECCIONE UN EMPLEADO</option>';

        foreach ($response as $key) {
            $rta .= '<option value="' . $key["idE"] . '">' . $key["nombre"] . '</option> ';
        }

        echo $rta;    
        
    }else if ($_GET['mode'] == "precioRepu") {

        $resultado = Array();
        $id= $_GET['id'];
        $consulta = " SELECT * from accesorios WHERE id_accesorios = $id";
        $query = mysqli_query($obj_conexion, $consulta);
        mysqli_close($obj_conexion);

        if ($query) {
            $array = array();

            while ($row = mysqli_fetch_array($query)) {
                
                array_walk_recursive($row, function (&$item, $key) {
                    if (!mb_detect_encoding($item, 'utf-8', true)) {
                        $item = utf8_encode($item);
                    }
                });
                $response = $row["precio"];                
            }

        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los proyectos.");
        }
        
        $rta      = "";
        echo $response;    
        
    }

    
    
    
}

