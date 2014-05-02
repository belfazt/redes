#!bin/bash

#echo $1
ip="192.168.x.x"
echo "hostname $1{ hardware ethernet $1 fixed-address $ip}" >> /etc/dhcpd.conf

echo $ip


