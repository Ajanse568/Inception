NAME = inception

all: up

up:	down
	@ mkdir ~/data
	@ mkdir ~/data/mariadb
	@ mkdir ~/data/wordpres
	@ docker compose -f srcs/docker-compose.yml up --build

prune:
	@ docker system prune -a -f

down:
	@ docker compose -f srcs/docker-compose.yml down

.PHONY: down clean prune