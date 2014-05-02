#!bin/bash
 
echo 0 > /proc/sys/net/ipv4/ip_forward
iptables -t nat -F
iptables -F
iptables -X
echo "Stopped PAT"