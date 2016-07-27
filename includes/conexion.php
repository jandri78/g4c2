<?php
$servidor = "10.170.0.210"; 
$usuario = "desarrollo"; 
$contrasenha = "qet?e6EC";
$BD = "telintelsms_api";


$conexion = @mysql_connect($servidor, $usuario, $contrasenha) or die(mysql_error()); 
$db = @mysql_select_db($BD, $conexion) or die(mysql_error()); 

if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{
	//echo 'Conectado  satisfactoriamente al servidor <br />';
}

?>

