<?php
include ("includes/conexion.php");
$dato = $_POST["dato"];
            	
    

$campaign_id =$_POST["campaign_id"];
					
			
		$consulta2 = mysql_query("SELECT rc_call.start_date,rc_call.status,rc_call.rc_campaign_id,rc_call_destination.mobile_number,rc_call.attempt,rc_call.rc_call_id FROM telintelsms_api.rc_call inner join rc_call_destination on rc_call_destination.rc_call_destination_id = rc_call.rc_call_destination_id where rc_call.rc_campaign_id='$campaign_id' and rc_call.status='QUEUED' order by rc_call_id LIMIT 400") 
		or die ("problemas con la consulta". mysql_error());

					$reg2=mysql_fetch_array($consulta2);

					 
					

					 /*	echo $reg2['rc_call_id']."</br>";

						echo $reg2['status']."</br>";

						echo $reg2['attempt']."</br>";

						echo $reg2['start_date']."</br>";

						echo $reg2['mobile_number']."</br>";

						echo $reg2['rc_campaign_id']."</br>";
					
 					*/
					

				

				mysql_close($consulta2);

				header('Content-Type: application/json');
				echo json_encode($reg2);

?>