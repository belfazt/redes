<html>
<head>
<meta charset="UTF-8" />
<title>Botonera</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
</head>


<?php
//echo ("Scripts Activos");
if (isset($_POST['updateFileLeases']))
{
	exec("sudo /var/www/redes/actualizarNetstat.sh");
	echo("Archivo actualizado");
}
if (isset($_POST['updateFileNetstat'])){
	exec("sudo /var/www/redes/actualizarNetstat.sh");
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
	exec("sudo bash /home/diegocamargo/startVlans.sh");
	echo ("vLans iniciadas");
}
if (isset($_POST['stopvlans']))
{
	exec("sudo bash /home/diegocamargo/stopVlans.sh");
	echo ("vLans detenidas");
}
if (isset($_POST['shareInternet']))
{
	exec("sudo bash /home/diegocamargo/startPAT.sh");
	echo("Compartiendo Internet");
}
if (isset($_POST['stopInternet']))
{
	exec("sudo bash /home/diegocamargo/stopPAT.sh");
	echo("Dejando de compartir internet");
}
?>
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


</form>
</html>