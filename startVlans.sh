#!bin/sh

vconfig add eth0 6 
vconfig add eth0 2 
vconfig add eth0 3 
vconfig add eth0 4 

ifconfig eth0.6 inet 192.168.1.254 netmask 255.255.255.0 broadcast 192.168.1.255 
ifconfig eth0.2 inet 192.168.2.254 netmask 255.255.255.0 broadcast 192.168.2.255 
ifconfig eth0.3 inet 192.168.3.254 netmask 255.255.255.0 broadcast 192.168.3.255 
ifconfig eth0.4 inet 192.168.4.254 netmask 255.255.255.0 broadcast 192.168.4.255 