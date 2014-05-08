<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Servidor DHCP
</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

</head>
<?php
//echo ("Scripts Activos");
if (isset($_POST['updateFileLeases']))
{
	exec("sudo /var/www/redes/actualizarArchivoLeases.sh");
	echo("Archivo actualizado");
}
if (isset($_POST['updateFileNetstat'])){
	exec("sudo /var/www/redes/actualizarNetstat.sh");
	echo("Archivo actualizado");	
}
if (isset($_POST['updateFileSyslogs'])){
	exec("sudo /var/www/redes/actualizarSyslog.sh");
	exec("sudo /var/www/redes/actualizarSyslogs.sh");
	exec("sudo /var/www/redes/actualizarSyslogs2.sh");
	exec("sudo /var/www/redes/actualizarSyslogs3.sh");
	exec("sudo /var/www/redes/actualizarSyslogs4.sh");
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
	exec("sudo bash /var/www/redes/startVlans.sh");
	echo ("vLans iniciadas");
}
if (isset($_POST['stopvlans']))
{
	exec("sudo bash /var/www/redes/stopVlans.sh");
	echo ("vLans detenidas");
}
if (isset($_POST['shareInternet']))
{
	exec("sudo bash /var/www/redes/startPAT.sh");
	echo("Compartiendo Internet");
}
if (isset($_POST['stopInternet']))
{
	exec("sudo bash /var/www/redes/stopPAT.sh");
	echo("Dejando de compartir internet");
}
?>

<body background="http://www.spacefit.ch/assets/img2/bg-grey-grad.jpg">
 <!--
 <h1>Hello, world!</h1>
-->
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
		<button class="btn btn-primary" name="updateFileNetstat">Actualizar netstat</button>
		<button class="btn btn-primary" name="updateFileSyslogs">Actualizar syslogs</button><br>
		<br>
		<button class="btn btn-default" name="vlans">Iniciar vLans</button>&nbsp;
		<button class="btn btn-danger" name="stopvlans">Detener vLans</button>&nbsp;
		<br><br>
		<button class="btn btn-primary" name="shareInternet">Compartir Internet</button>&nbsp;
		<button class="btn btn-warning" name="stopInternet">Dejar de Compartir</button>&nbsp;
	</center>
 </center>
 <br>
<center>
	<h2>Leases</h2>
 <iframe src="leases.html" width="90%" height="200" scrolling="auto"
frameborder="0" allowTransparency="true">Cargando leases...</iframe>

<br>
<h2>Netstat</h2>
<iframe src="netstat.html" width="90%" height="500" scrolling="auto"
frameborder="0" allowTransparency="true">Cargando netstat...</iframe>

<br>
<h2>Syslogs</h2>
<iframe src="syslogs.html" width="90%" height="500" scrolling="auto"
frameborder="0" allowTransparency="true">Cargando syslogs...</iframe>
<iframe src="syslogs2.html" width="90%" height="500" scrolling="auto"
frameborder="0" allowTransparency="true">Cargando syslogs...</iframe>
<iframe src="syslogs3.html" width="90%" height="500" scrolling="auto"
frameborder="0" allowTransparency="true">Cargando syslogs...</iframe>
<iframe src="syslogs4.html" width="90%" height="500" scrolling="auto"
frameborder="0" allowTransparency="true">Cargando syslogs...</iframe>
<iframe src="syslogs5.html" width="90%" height="500" scrolling="auto"
frameborder="0" allowTransparency="true">Cargando syslogs...</iframe>

</center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
