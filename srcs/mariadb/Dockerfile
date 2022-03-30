FROM debian:buster

RUN apt-get update && apt-get install -y vim mariadb-server
ADD ./conf/wordpress.sql /tmp/wordpress.sql


# ENTRYPOINT /etc/init.d/mysql start \
#     && sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/conf.d/50-server.cnf \
#     && mysql -u root < /tmp/wordpress.sql \
#     && /etc/init.d/mysql stop \
#     && /usr/sbin/mysqld \
# ENTRYPOINT tail -f
