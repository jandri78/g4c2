<!DOCTYPE html>
<html lang="es">
<head>
  <title>Go4Cclients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <h2>Campañas Pending</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Campañas Running</a></li>
    <li><a data-toggle="tab" href="#menu1">Llamadas Queue</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 3</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 4</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Buscador de Campaña</h3>
      <button type="download" class="btn btn-default">Download</button>
		<table class="table table-condensed">
		    <thead>
		      <tr>
		        <th>Status</th>
		        <th>Campaign Id</th>
		        <th>Start Date</th>
		        <th>Campaign Name</th>
		        <th>Organization</th>
		      </tr>
		       <tbody>

     <?php
		include ("includes/conexion.php");

		//$consulta1 = mysql_query('SELECT * FROM telintelsms_api.users  where email like ("%andres%")')
		$consulta1 = mysql_query('SELECT rc_campaign.status,rc_campaign.rc_campaign_id,rc_campaign.start_date,rc_campaign.name as rc_name,organizations.name as org_name FROM telintelsms_api.rc_campaign inner join organizations on organizations.organization_id = rc_campaign.organization_id where rc_campaign.status = "RUNNING" and rc_campaign.type != "OTP" order by start_date')
		or die ("problemas con la consulta". mysql_error());

		while ($reg=mysql_fetch_array($consulta1)) {
		    
		   
			echo "<tr>
			<td>".$reg['status']."</td>";

			echo "<td>".$reg['rc_campaign_id'].
			"</td>";
			echo "<td>".$reg['start_date'].
			"</td>";

			echo "<td>".$reg['rc_name'].
			"</td>";

			echo "<td>".$reg['org_name'].
			"</td>
			</tr>";	
		}
		mysql_close($consulta1);
	?>
		   </tbody>
		  </table>
   <!-- Segundo menu-->     
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Campañas QUEUE</h3>
      <p>Buscador de llamadas, Por favor volver a la pestaña "Llamadas Queue" despues de el "Submit"</p>
      	<form action="index.php" role="form" method="post">
	    <div class="form-group">
	      <label for="name">Campaign ID:</label>
	     <input type="hidden" name="dato" id="dato" value="1">
	      <input type="name" class="form-control" id="campaign_id" placeholder="Campaign ID" name="campaign_id" required title="Campo Obligatorio">
	    </div>
	    <button type="submit" class="btn btn-default">Submit</button>
	   	<button type="reset" class="btn btn-default">Reset</button>
  		</form>
			<table class="table table-condensed">
		    <thead>
		      <tr>
		        <th>Call Id</th>
		        <th>Status</th>
		        <th>Attempt</th>
		        <th>Start Date</th>
		        <th>Mobile Number</th>
		        <th>Campaign Id</th>
		      </tr>
		       <tbody>
             <?php
            include ("includes/conexion.php");
            $dato = $_POST["dato"];
            	if ($dato == 1) {

					$campaign_id = $_POST["campaign_id"]; 
					
			
			$consulta2 = mysql_query("SELECT rc_call.start_date,rc_call.status,rc_call.rc_campaign_id,rc_call_destination.mobile_number,rc_call.attempt,rc_call.rc_call_id FROM telintelsms_api.rc_call inner join rc_call_destination on rc_call_destination.rc_call_destination_id = rc_call.rc_call_destination_id where rc_call.rc_campaign_id='$campaign_id' and rc_call.status='QUEUED' order by rc_call_id LIMIT 400")
			or die ("problemas con la consulta". mysql_error());

					while ($reg2=mysql_fetch_array($consulta2)) {

					 	echo "<tr>
						<td>".$reg2['rc_call_id']."</td>";

						echo "<td>".$reg2['status'].
						"</td>";

						echo "<td>".$reg2['attempt'].
						"</td>";

						echo "<td>".$reg2['start_date'].
						"</td>";

						echo "<td>".$reg2['mobile_number'].
						"</td>";

						echo "<td>".$reg2['rc_campaign_id'].
						"</td>
						</tr>";	
 
					}

				}

				mysql_close($consulta2);
			
               ?>
               </tbody>
               </thead>
               </table>
    </div>

     <div id="menu2" class="tab-pane fade">
    <h3>Menu3</h3>
    		Llamadas Completadas:
		<progress value="22" max="100">
		</progress>
		</br>
		</br>
		Llamadas No Completadas:
		<progress value="50" max="100"></progress>
    </div>

    <div id="menu3" class="tab-pane fade">
    <h3>Menu4</h3>

    <?php
    $y=4;
    $x=2;
    echo "Value from php";
    ?>
    <progress value="<?php echo $x;?>" max="<?php echo $y;?>"></progress>
    </div>
     <div id="menu4" class="tab-pane fade">
     </div>
  </div>
  </div>
</div>
</body>
</html>