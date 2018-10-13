# Docker controls
up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose up -d --build

s:
	docker-compose ps

# Application

migrate:
	docker-compose exec php-cli php artisan migrate

seed:
	docker-compose exec php-cli php artisan db:seed

test:
	@docker-compose exec php-cli vendor/bin/phpunit

# Front-end

assets:
	docker-compose exec node yarn install

watch:
	docker-compose exec node yarn watch

perm:
	sudo chown ${USER}:${USER} app -R
	sudo chmod -R 777 bootstrap/cache
	sudo chmod -R 777 storage
	sudo chown ${USER}:${USER} bootstrap/cache -R
	sudo chown ${USER}:${USER} storage -R
