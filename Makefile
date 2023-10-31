NAME = inception

all: up

up:	down
	@ docker compose -f srcs/docker-compose.yml up --build

prune:
	@ docker system prune -a -f

down:
	@ docker compose -f srcs/docker-compose.yml down

.PHONY: down clean prune