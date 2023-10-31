NAME = inception

all: up

up:	down
	@ mkdir -m777 -p ~/data
	@ mkdir -m777 -p ~/data/mariadb
	@ mkdir -m777 -p ~/data/wordpres
	@ docker compose -f srcs/docker-compose.yml up --build

prune:
	@ docker system prune -a -f

down:
	@ docker compose -f srcs/docker-compose.yml down

.PHONY: down clean prune