# FROM debian:buster

# RUN apt-get update && apt-get install -y vim mariadb-server
# ADD ./conf/wordpress.sql /tmp/wordpress.sql


# ENTRYPOINT /etc/init.d/mysql start \
#     && sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mariadb.conf.d/50-server.cnf \
#     && mysql -u root < /tmp/wordpress.sql \
#     && /etc/init.d/mysql stop \
#     && /usr/sbin/mysqld \
# # ENTRYPOINT tail -f

FROM debian:buster

ADD ./conf/wordpress.sql .

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y mariadb-server vim

RUN sed -i 's/127.0.0.1/0.0.0.0/g' etc/mysql/mariadb.conf.d/50-server.cnf

ENTRYPOINT  service mysql start ; [ ! -d "/var/lib/mysql/wordpress" ] \
            && mysql -u root < wordpress.sql ; service mysql restart
EXPOSE 3306
