<?php


		include ("includes/conexion.php");

		//$consulta1 = mysql_query('SELECT * FROM telintelsms_api.users  where email like ("%andres%")')
		$consulta1 = mysql_query('SELECT rc_campaign.status,rc_campaign.rc_campaign_id,rc_campaign.start_date,rc_campaign.name as rc_name,organizations.name as org_name FROM telintelsms_api.rc_campaign inner join organizations on organizations.organization_id = rc_campaign.organization_id where rc_campaign.status = "RUNNING" and rc_campaign.type != "OTP" order by start_date')
		or die ("problemas con la consulta". mysql_error());

		while ($reg=mysql_fetch_array($consulta1)) {
		    
		   echo $reg[2]."</br>";

		   echo $reg[3]."</br>";

		   echo $reg[4]."</br>";
		}

		mysql_close($consulta1);

		
	


?>