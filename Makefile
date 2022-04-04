SRC = srcs/docker-compose.yml
NAME = inception

up: ${NAME}

${NAME}: ${SRC} 
	docker-compose -f ${SRC} up --build 
down: 
	docker-compose -f ${SRC} down --volumes
rmi: 
	docker-compose -f ${SRC} down --rmi all --volumes
images :
	docker rmi mariadb wordpress nginx
re: down up