FROM php:7.2-apache
MAINTAINER gouda
RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev
 
RUN mkdir /etc/ssl/certss     
 COPY my.crt /etc/ssl/certss/my.crt
 COPY my.key /etc/ssl/certss/my.key
 

RUN sed -i "s|SSLCertificateFile.*|SSLCertificateFile  /etc/ssl/certss/my.crt|g" /etc/apache2/sites-available/default-ssl.conf
RUN sed -i "s|SSLCertificateKeyFile.*|SSLCertificateKeyFile  /etc/ssl/certss/my.key|g" /etc/apache2/sites-available/default-ssl.conf

RUN sed -i "s|<Directory /var/www/.*|<Directory /var/www/html/public/>|g" /etc/apache2/apache2.conf
RUN sed -i '172s/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf



# RUN sed -i '172 a Order deny,allow' /etc/apache2/apache2.conf
# RUN sed -i '173 a Allow from all' /etc/apache2/apache2.conf
RUN echo "ServerName twinlist.com" >> /etc/apache2/apache2.conf

# WORKDIR /var/www
# RUN chown -R www-data:www-data /var/www/html/
# RUN chmod -R 777 .
WORKDIR /var/www/html




RUN docker-php-ext-install mysqli pdo pdo_mysql bcmath zip
# mbstring xml json ctype openssl tokenizer
RUN a2enmod rewrite
RUN a2enmod ssl
RUN apt-get install -y zip git

RUN sed -i "s|DocumentRoot.*|DocumentRoot /var/www/html/public|g" /etc/apache2/sites-available/000-default.conf
RUN a2dissite 000-default.conf
RUN a2ensite 000-default.conf

RUN sed -i "s|DocumentRoot.*|DocumentRoot /var/www/html/public|g" /etc/apache2/sites-available/default-ssl.conf
RUN a2dissite default-ssl.conf
RUN a2ensite default-ssl.conf

# WORKDIR /var/www
# RUN chown -R www-data:www-data html
# WORKDIR /var/www/html


# RUN service apache2 reload