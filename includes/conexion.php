<?php
$servidor = "10.170.0.210"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "desarrollo"; //El usuario que acabamos de crear en la base de datos 
$contrasenha = "qet?e6EC"; //La contraseña del usuario que utilizaremos 
$BD = "telintelsms_api"; //El nombre de la base de datos


$conexion = @mysql_connect($servidor, $usuario, $contrasenha) or die(mysql_error()); 
$db = @mysql_select_db($BD, $conexion) or die(mysql_error()); 

if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{
	//echo 'Conectado  satisfactoriamente al servidor <br />';
}



?>

