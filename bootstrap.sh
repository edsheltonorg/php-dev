#!/usr/bin/env bash
apt-get update 
apt-get upgrade -y
apt install -y apache2 php git
if ! [ -L /var/www ]; then
	rm -rf /var/www/html
	ln -fs /vagrant/html /var/www/html
fi
systemctl enable apache2
systemctl restart apache2
sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf 
