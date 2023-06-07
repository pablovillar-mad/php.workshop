.PHONY: migrations dev network

CONTAINER := phpworkshop-app-1

dev:
	$(info Make: Starting containers.)
	@make network
	@docker compose up -d

nodev:
	$(info Make: Stoping containers.)
	@docker compose down
	@docker compose rm
	@make remove-network

network:
	@docker network create test

remove-network:
	@docker network rm test

migrations: 
	@docker exec $(CONTAINER) php bin/console doctrine:migrations:migrate

composer:
	@docker exec $(CONTAINER) composer install

test:
	@make test-phpunit
	@make test-phpstan

test-phpunit:
	@docker exec $(CONTAINER) ./vendor/bin/phpunit tests

test-phpstan:
	@docker exec $(CONTAINER) ./vendor/bin/phpstan analyse src tests --level 9


