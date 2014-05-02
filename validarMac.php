<html>
	<head>
		<title>
			Validar MAC Address
		</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
	</head>
	<body>

		<div class = "container">
			<form method="post">
			<h1>
				<center>
					Direcci&oacute;n MAC
				</center>
			</h1>
			<input type="text" class="form-control" placeholder="Introducir direcci&oacute;n MAC" name="macadd"><br>

			</form>
			<div class="alert alert-info">
			<?php
			$mac = ($_POST[macadd]);
			$asignar = preg_match('/^[0-9a-fA-F]{2}(?=([:;.]?))(?:\\1[0-9a-fA-F]{2}){5}$/i', $mac);
			if($asignar) {
			  
			  echo "La direcci&oacute;n MAC " .$mac ." es v&aacute;lida";

			} 

			else {
			  
			  echo "La direcci&oacute;n MAC ".$mac ." es inv&aacute;lida";

			}
			?>
			</div>


		<div class = "alert alert-warning">
			<?php
				if ($asignar){
					echo "Asignando direcci&oacute;n IP ".exec ("sudo bash /var/www/html/redes/asignarIP.sh $mac"). " a la direcci&oacute;n MAC ".$mac;

				}
				else{
					echo "No asignada";
				}
			?>
		</div>





		</div>
		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	</body>
</html>

