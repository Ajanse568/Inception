NAME = inception

all: prune up

up:
	@ docker-compose -f src/docker-compose.yml up --build

prune: clean
	@ docker system prune -f

clean: down
	@ rm -rf ./data/

down:
	@ docker-compose -f srcs/docker-compose.yml down

.PHONY: down clean prune up all