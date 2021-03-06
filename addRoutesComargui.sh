#!bin/sh

#route add -net 192.168.2.0/24 gw 192.168.10.1 dev eth0
#route add -net 172.2.0.0/25 gw 192.168.10.1 dev eth0
#route add -net 10.0.8.0/21 gw 192.168.10.1 dev eth0
#route add -net 192.168.4.0/26 gw 192.168.10.1 dev eth0
#route add -net 192.168.6.0/23 gw 192.168.10.1 dev eth0
#route add -net 11.0.16.0/20 gw 192.168.10.1 dev eth0

#route add -net 192.168.10.0/29 gw 192.168.10.1 dev eth0

#route add -net 172.1.0.0/23 gw 192.168.10.1 dev eth0
#route add -net 172.16.0.0/23 gw 192.168.10.1 dev eth0
#route add -net 172.17.0.0/23 gw 192.168.10.1 dev eth0
#route add -net 10.0.3.0/24 gw 192.168.10.1 dev eth0
#route add -net 192.168.1.0/24 gw 192.168.10.1 dev eth0
#route add -net 171.160.1.0/24 gw 192.168.10.1 dev eth0

#route add -net 172.1.0.0/23 gw 192.168.10.1 dev eth0
#route add -net 172.16.0.0/23 gw 192.168.10.1 dev eth0
#route add -net 172.17.0.0/23 gw 192.168.10.1 dev eth0
#route add -net 10.0.3.0/24 gw 192.168.10.1 dev eth0
#route add -net 192.168.1.0/24 gw 192.168.10.1 dev eth0
#route add -net 171.160.1.0/24 gw 192.168.10.1 dev eth0

sudo route add -net 192.168.1.0/24 gw 192.168.1.254 dev eth0.6
sudo route add -net 192.168.2.0/24 gw 192.168.2.254 dev eth0.2
sudo route add -net 192.168.3.0/24 gw 192.168.3.254 dev eth0.3
sudo route add -net 192.168.4.0/24 gw 192.168.4.254 dev eth0.4
sudo route add -net 192.168.5.0/24 gw 192.168.1.254 dev eth0.6
sudo route add -net 192.168.6.0/24 gw 192.168.2.254 dev eth0.2
sudo route add -net 192.168.7.0/24 gw 192.168.3.254 dev eth0.3
sudo route add -net 192.168.8.0/24 gw 192.168.4.254 dev eth0.4
sudo route add -net 192.168.9.0/28 gw 192.168.4.254 dev eth0.4



#sudo route del -net 192.168.1.0/24 gw 0.0.0.0 dev eth0.6
#sudo route del -net 192.168.2.0/24 gw 0.0.0.0 dev eth0.2
#sudo route del -net 192.168.3.0/24 gw 0.0.0.0 dev eth0.3
#sudo route del -net 192.168.4.0/24 gw 0.0.0.0 dev eth0.4
#sudo route add -net 192.168.1.0/20 gw 192.168.1.254 dev eth0.6

