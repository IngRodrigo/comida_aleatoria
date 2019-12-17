<?php

include_once './Conexion.php';

function consultarExistenciaComida($id) {
    $select = "Select idcomida from public.comidas where idcomida=$id";

    try {

        foreach (obtenerConexion()->query($select) as $fila) {
            if (!is_null($fila['idcomida'])) {
                //print 'Ya existe '.$fila['idcomida'];
                return true;
            } else {
                //print 'El codigo no existe es '.$fila['idcomida'];
                return false;
            }
        }
    } catch (Exception $ex) {
        
    }
}

function insertarRegistro($id, $name, $ingredientes, $instrucciones, $imagen, $video, $fecha) {
    $insert = "insert into comidas (idComida, nombre, ingredientes, instrucciones, imagen_url, clip_url, fecha_insert)
        values ($id,'$name','$ingredientes', '$instrucciones','$imagen','$video','$fecha');";
    try {
        $conexion = obtenerConexion();
        $conexion->beginTransaction();
        $resultado = $conexion->exec($insert);
        if ($resultado > 0) {
            // print 'Registro exitoso';
        }
        $conexion->commit();
        return true;
    } catch (Exception $ex) {
        print $ex->getMessage();
        return false;
    }
}

function obtenerComidas() {
    //$conexion= obtenerConexion();
    try {
        $sql = 'SELECT * FROM public.comidas';
        foreach (obtenerConexion()->query($sql) as $row) {
        
            $lista[] = $row;
        }
                if(!empty($lista)){
                   return $lista;
        }

       
    } catch (Exception $ex) {
        print 'Error ' . $ex->getMessage();
    }
}
function obtenerComidasPorParametro($parametro){
        try {
        $sql = 'SELECT * FROM public.comidas WHERE nombre like '."'%".$parametro."%'";
        
        foreach (obtenerConexion()->query($sql) as $row) {
            
            $lista[] = $row;
        }
        if(!empty($lista)){
                   return $lista;
        }

       
    } catch (Exception $ex) {
        print 'Error ' . $ex->getMessage();
    }
}

function fechaActual() {
    $fecha = date("Y") . "/" . date("m") . "/" . date("d");
    return $fecha;
}
