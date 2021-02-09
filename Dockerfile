# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: maadam <maadam@student.21-school.ru>       +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/08/19 14:10:12 by maadam            #+#    #+#              #
#    Updated: 2020/08/19 14:10:12 by maadam           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# Image
FROM debian:buster

# Services
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install nginx
RUN apt-get -y install wget
RUN apt-get -y install vim
RUN apt-get -y install curl
RUN apt-get -y install mariadb-server
RUN apt-get -y install php-fpm php-mysql

# PHP
RUN apt-get -y install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip

# SSL cert
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/ssl_maadam.key \
-out /etc/ssl/certs/ssl_maadam.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=SCHOOL21/OU=maadam/CN=localhost"

# Wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -zxvf latest.tar.gz
RUN rm -rf latest.tar.gz
RUN mv wordpress /var/www/html/wordpress
RUN chown -R www-data:www-data /var/www/html
RUN chmod 775 -R /var/www/html

# Configs
COPY /srcs/nginx.conf /etc/nginx/sites-available/default
COPY /srcs/wp-config.php /var/www/html/wordpress/wp-config.php
COPY /srcs/config.inc.php /var/www/html/phpmyadmin/config.inc.php
RUN rm -f /var/www/html/index.nginx-debian.html
COPY srcs/*.sh ./
RUN chmod +x *.sh

# PHPMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar -zxvf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN rm -rf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages/ /var/www/html/phpmyadmin
RUN chown -R www-data:www-data /var/www/html/phpmyadmin
RUN cp -a /var/www/html/phpmyadmin/phpMyAdmin-5.0.2-all-languages/. /var/www/html/phpmyadmin
RUN rm -R /var/www/html/phpmyadmin/phpMyAdmin-5.0.2-all-languages

# Ports http & https
EXPOSE 80
EXPOSE 443

# Launch services
ENTRYPOINT ["bash", "services_start.sh"]
