#!bin/bash

#echo $1

NAME[0]="Zara"
NAME[1]="Qadir"
NAME[2]="Mahnaz"
NAME[3]="Ayan"
NAME[4]="Daisy"
NAME[5]="Hassan"
NAME[6]="Peach"
NAME[7]="Mario"
NAME[8]="Doge"
NAME[9]="Stacy"
NAME[10]="Zara"

#numero = cat numActual
#numero = line in $(cat numActual)

#echo "$numero"


numero=$(head -n 1 /var/www/html/redes/numActual)

if (( numero < 11 )) ;
	then
	ip="192.168.1.$numero"
	echo "host ${NAME[numero]}{
		  hardware ethernet $1;
		  fixed-address $ip;
	}" >> /etc/dhcpd.conf	
	let numero++;
else
	numero=$(head -n 1 /var/www/html/redes/numUno)	
fi


echo $numero > /var/www/html/redes/numActual
echo $ip


