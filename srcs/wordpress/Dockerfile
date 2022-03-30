FROM debian:buster

RUN apt-get update && apt-get install -y vim curl php7.3-fpm php-mysql unzip

RUN mkdir  /run/php/


#check if wordpress is installed
WORKDIR "/tmp"
RUN curl -O https://wordpress.org/latest.tar.gz && tar -xzf latest.tar.gz && rm latest.tar.gz
# RUN tar xzvf latest.tar.gz
ADD ./conf/wp-config.php /tmp/wordpress/wp-config.php
RUN mkdir /var/www \
    && mkdir /var/www/html
RUN cp -r /tmp/wordpress/* /var/www/html


ENTRYPOINT echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf \
           && /usr/sbin/php-fpm7.3 -F -R 
           #fpm work in background /usr/sbin/php-fpm7.3 -F -R 

EXPOSE 9000