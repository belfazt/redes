#!/bin/bash
 
echo 1 > /proc/sys/net/ipv4/ip_forward
iptables -P INPUT ACCEPT
iptables -P OUTPUT ACCEPT
iptables -P FORWARD ACCEPT
iptables -A POSTROUTING -t nat -o wlan0 -j MASQUERADE
echo "Started PAT"