<?php

include ("includes/conexion2.php");

/*
// Se asume que hoy es March 10th, 2001, 5:16:18 pm, y que estamos en la
// zona horaria Mountain Standard Time (MST)

$hoy = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$hoy = date("m.d.y");                         // 03.10.01
$hoy = date("j, n, Y");                       // 10, 3, 2001
$hoy = date("Ymd");                           // 20010310
$hoy = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$hoy = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$hoy = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$hoy = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$hoy = date("H:i:s");                         // 17:16:18
$hoy = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)

*/

$dia1 = date("j")."</br>";
//echo $dia1;

if ($dia1<10) {
	$r=strtotime("-7 Day");
	$today2=date("M  j", $r);
}else{
	$r=strtotime("-7 Day");
	$today2=date("M j", $r);
}

//echo date ("l j")."</br>";
//echo date('l jS \of F Y h:i:s A')."</br>";
//Secho date(DATE_RFC2822)."</br>";
/*
$hoy = date("D M j G:i:s Y");
$hoy2 = date("D M j");

echo $hoy."</br>";
//echo $hoy2."</br>";

if ($ssd<$hoy) {
	//echo "verdadero";
}else{
	//echo "falso";
}*/


$se2="SELECT count(*) FROM cdr_sansay.cdr_g4c where cdr_g4c.start_Time_Date like '%$today2%' and sip_cause =200 limit 10";
$se3="SELECT count(*) FROM cdr_sansay.cdr_g4c where cdr_g4c.start_Time_Date like '%$today2%' and sip_cause !=200 limit 10";
$se4="SELECT count(*) FROM cdr_sansay.cdr_g4c where cdr_g4c.start_Time_Date like '%$today2%' limit 10";

$consulta3 = mysql_query($se2)or die ("problemas con la consulta". mysql_error());

					while ($reg3=mysql_fetch_array($consulta3)) {

					echo "Llamadas completadas $today2 ".$reg3[0]."</br>";
					}
		
$consulta4 = mysql_query($se3)or die ("problemas con la consulta". mysql_error());

					while ($reg4=mysql_fetch_array($consulta4)) {

					echo "Llamadas NO completadas $today2 ".$reg4[0]."</br>";
					}

$consulta5 = mysql_query($se4)or die ("problemas con la consulta". mysql_error());

					while ($reg5=mysql_fetch_array($consulta5)) {

					echo "Total Llamadas $today2 ".$reg5[0]."</br>";
					}

echo $reg4;
?>