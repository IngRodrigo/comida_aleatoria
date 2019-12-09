<?php

function obtenerConexion(){
    try {
    $pdo= new PDO('pgsql:host=localhost;port=5432;dbname=testrodrigo;user=postgres;password=admin');
    //echo "Conexion exitosa";
} catch (Exception $ex) {
    echo "error en la conexion";
}
return $pdo;
}
function cerraConexion(){
    $pdo=null;
}