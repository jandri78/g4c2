<?php
$servidor = "10.170.0.231";
$usuario = "consulta"; 
$contrasenha = "Qu3ry";  
$BD = "cdr_sansay"; 

$conexion = @mysql_connect($servidor, $usuario, $contrasenha) or die(mysql_error()); 
$db = @mysql_select_db($BD, $conexion) or die(mysql_error()); 

if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{
	//echo 'Conectado  satisfactoriamente al servidor <br />';
}



?>

