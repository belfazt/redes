#Instalar demonio
sudo apt-get install xinetd tftpd tftp

#Crear archivo para configuración
sudo touch /etc/tftp

#Escribir archivo de configuración
echo "
service tftp 
{ 
protocol 	= udp 
port 		= 69 
socket_type 	= dgram 
wait 		= yes 
user 		= nobody 
server 		= /usr/sbin/in.tftpd 
server_args 	= /tftpboot 
disable 	= no 
}
" >> /etc/tftp


#Crear carpeta de respaldos
mkdir /tftpboot
chmod -R 777 /tftpboot
chown -R nobody /tftpboot

#Reiniciar servicios
service xinetd stop
service xinetd start

#Crear archivos donde se va a escribir la información
touch /tftpboot/NightmareTeamRT-LINUX-config
chmod 666 /tftpboot/NightmareTeamRT-LINUX-config

touch /tftpboot/NightmareTeamRT-VLAN1-config
chmod 666 /tftpboot/NightmareTeamRT-VLAN1-config

touch /tftpboot/NightmareTeamRT-VLAN2-config
chmod 666 /tftpboot/NightmareTeamRT-VLAN2-config