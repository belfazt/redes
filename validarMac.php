<html>
	<head>
		<title>
			Validar MAC Address
		</title>
		<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.css">

		<!-- Latest compiled and minified JavaScript -->
	</head>
	<body>

		<div class = "container">
			<form method="post">
			<h2>
				<center>
					Direcci&oacute;n MAC
				</center>
			</h2>
			<input type="text" class="form-control" placeholder="Introducir direcci&oacute;n MAC" name="macadd"><br>

			</form>
			<div class="alert alert-info">
			<?php
			$mac = ($_POST[macadd]);
			$asignar = preg_match('/^[0-9a-fA-F]{2}(?=([:;.]?))(?:\\1[0-9a-fA-F]{2}){5}$/i', $mac);
			if ($asignar){
					echo exec ("sudo bash /var/www/html/redes/asignarIP.sh $mac");
					exec("sudo killall dhcpd");
					//echo("Servidor apagado \n");
					exec("sudo dhcpd -cf /etc/dhcpd.conf");
					//echo("Servidor encendido");
				}
				else{
					echo "Direcci&oacute;n MAC no v&aacute;lida";
				}
			?>
			</div>
		<!--<div class = "alert alert-warning">
			
				Si no aparece ninguna dirección IP, favor de volver a introducir tu direcci&oacute;n MAC
		</div>-->





		</div>
		

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	</body>
</html>

