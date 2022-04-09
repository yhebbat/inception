sed -i 's|listen = /run/php/php7.3-fpm.sock|listen = 0.0.0.0:9000|g' /etc/php/7.3/fpm/pool.d/www.conf;
if [ ! -d "/run/php" ]; then
mkdir /run/php/;
fi
if [ ! -f "/var/www/wp/wp-config.php" ]; then
echo "ramadaaaaan"
cd /tmp \
    && curl -LO https://wordpress.org/latest.tar.gz && tar xzvf latest.tar.gz \
    && mkdir -p /var/www/wp \
    && cp -r /tmp/wordpress/* /var/www/wp/ \
    && chown -R www-data:www-data /var/www/wp/;
    cp /wp-config.php /var/www/wp/;
fi
php-fpm7.3 -F -R
