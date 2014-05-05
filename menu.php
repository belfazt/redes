<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	Servidor DHCP
	</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.css">

	<!-- Latest compiled and minified JavaScript -->

</head>
<?php
//echo ("Scripts Activos");
if (isset($_POST['updateFileLeases'])){
	exec("sudo /var/www/html/redes/actualizarArchivoLeases.sh");
	echo("Archivo actualizado");
}
if (isset($_POST['updateFileNetstat'])){
	exec("sudo /var/www/html/redes/actualizarNetstat.sh");
	echo("Archivo actualizado");	
}
if (isset($_POST['start']))
{
	exec("sudo dhcpd -cf /etc/dhcpd.conf");
	echo("Servidor encendido");
}
if (isset($_POST['restart']))
{
	exec("sudo killall dhcpd");
	echo("Servidor apagado \n");
	exec("sudo dhcpd -cf /etc/dhcpd.conf");
	echo("Servidor encendido");
	
}
if (isset($_POST['stop']))
{
	echo exec("sudo killall dhcpd");
	echo("Servidor apagado");
}
if (isset($_POST['vlans']))
{
	echo exec("sudo bash /var/www/html/redes/startVlans.sh");
	echo ("vLans iniciadas");
}
if (isset($_POST['stopvlans']))
{
	echo exec("sudo bash /var/www/html/redes/stopVlans.sh");
	echo ("vLans detenidas");
}
if (isset($_POST['shareInternet']))
{
	echo exec("sudo bash /var/www/html/redes/startPAT.sh");
	echo("Compartiendo Internet");
}
if (isset($_POST['stopInternet']))
{
	exec("sudo bash /var/www/html/redes/stopPAT.sh");
	echo("Dejando de compartir internet");
}
?>

<body>
 <!--
 <h1>Hello, world!</h1>
-->
<div class="container">
	<center>
	 	<h1>Servidor DHCP</h1>
	 	
	 	<!--<iframe allowTransparency="true" src="botones.php" height="300" scrolling="auto"
	frameborder="0" allowTransparency="true">
	 		Loading Panel...
	 	</iframe>-->
	 	<form method="post">
		<center>
			<button class="btn btn-primary" name="start">Encender</button>&nbsp;
			<button class="btn btn-info" name="restart">Reiniciar</button>&nbsp;
			<button class="btn btn-danger" name="stop">Apagar</button>&nbsp;
			<br><br>
			<button class="btn btn-success" name="updateFileLeases">Actualizar leases</button>&nbsp;
			<button class="btn btn-primary" name="updateFileNetstat">Actualizar netstat</button><br>
			<br>
			<button class="btn btn-default" name="vlans">Iniciar vLans</button>&nbsp;
			<button class="btn btn-danger" name="stopvlans">Detener vLans</button>&nbsp;
			<br><br>
			<button class="btn btn-primary" name="shareInternet">Compartir Internet</button>&nbsp;
			<button class="btn btn-warning" name="stopInternet">Dejar de Compartir</button>&nbsp;
		</center>
	 </center>
	 <br>

	<iframe src="validarMac.php" width="100%" height="300" scrolling="auto" frameborder="0" allowTransparency="true">Cargando...</iframe>
	<center>
		<h2>Leases</h2>
	 <iframe src="leases.html" width="90%" height="200" scrolling="auto"
	frameborder="0" allowTransparency="true">Cargando leases...</iframe>

	<br>
	<h2>Netstat</h2>
	<iframe src="netstat.html" width="90%" height="500" scrolling="auto"
	frameborder="0" allowTransparency="true">Cargando leases...</iframe>
	</center>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>