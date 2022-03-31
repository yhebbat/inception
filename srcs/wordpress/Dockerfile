FROM debian:buster

RUN apt-get update && apt-get install -y vim wget php7.3-fpm php-mysql unzip

RUN mkdir  /run/php/

#check if wordpress is installed
# WORKDIR "/tmp"

# ADD ./conf/wp-config.php /var/www/html/wordpress/wp-config.php

# RUN wget -P /var/www/html https://wordpress.org/latest.zip && unzip -f latest.zip && rm latest.zip
EXPOSE 9000
ENTRYPOINT 	[ ! -d "/var/www/wordpress" ] && wget -P /var/www/ https://wordpress.org/latest.zip \
			&& unzip /var/www/latest.zip -d /var/www/ \
			&& rm -rf /var/www/latest.zip \
			&& chown -R www-data /var/www/wordpress \
            && mv /var/www/wordpress/wp-config-sample.php /var/www/wordpress/wp-config.php \
			&& sed -i 's/database_name_here/'$WP_DATABASE_NAME'/g' /var/www/wordpress/wp-config.php \
    		&& sed -i 's/username_here/'$WP_DATABASE_USER'/g' /var/www/wordpress/wp-config.php \
    		&& sed -i 's/password_here/'$WP_DATABASE_PASSWORD'/g' /var/www/wordpress/wp-config.php \
    		&& sed -i 's/localhost/'$WP_HOSTNAME'/g' /var/www/wordpress/wp-config.php \
            ; echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf \
            && /usr/sbin/php-fpm7.3 -F -R 

# mv /var/www/wordpress/wp-config-sample.php /var/www/wordpress/wp-config.php 
# sed -i 's/database_name_here/'$WP_DATABASE_NAME'/g' /var/www/wordpress/wp-config.php 
# sed -i 's/username_here/'$WP_DATABASE_USER'/g' /var/www/wordpress/wp-config.php 
# sed -i 's/password_here/'$WP_DATABASE_PASSWORD'/g' /var/www/wordpress/wp-config.php 
# sed -i 's/localhost/'$WP_HOSTNAME'/g' /var/www/wordpress/wp-config.php 