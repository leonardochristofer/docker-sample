# Docker Stuff
up:
	docker-compose up -d
	
down:
	docker-compose down

build:
	docker-compose up --build

rm:
	docker-compose up --remove-orphans