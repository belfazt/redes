#!/bin/sh

sudo rm /var/www/redes/netstat.html
sudo touch /var/www/redes/netstat.html
sudo netstat -n  echo | grep tcp >> /var/www/redes/netstat.html
