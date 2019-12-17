<?php
//$user = 'admin';
//$passwd = 'admin';
//$db = 'testRodrigo';
//$port = 5432;
//$host = 'localhost';
//$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
//$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
//echo "Conexion exitosa <hr>";
//	$fecha=date("Y")."/".date("m")."/".date("d");
//echo "la fecha actual es " .$fecha;
//$phpinfo = phpinfo(); 
//$codigo=3;
//if($codigo==consultarExistenciaComida(1)){
//    print 'Ya existe la comida';
//}else{
//    print 'No existe la comida';
//}
include_once './Procesos.php';
obtenerComidas();
?>
