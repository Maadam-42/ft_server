#!bin/bash

mariadb -e "CREATE DATABASE db_wordpress"
mariadb -e "CREATE USER 'user'@'localhost' IDENTIFIED BY 'passwors';"
mariadb -e "GRANT ALL ON *.* TO 'user'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;"
mariadb -e "FLUSH PRIVILEGES"
