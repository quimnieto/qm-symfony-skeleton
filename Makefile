hello:
	@echo "Hello!!!"

clean-cache:
	@rm -rf apps/*/*/var
	@docker exec qm-php ./apps/backoffice/backend/bin/console cache:warmup

composer-env-file:
	@if [ ! -f .env.local ]; then echo '' > .env.local; fi

.PHONY: test
test: composer-env-file
	docker exec qm-php ./vendor/bin/phpunit

phpstan:
	vendor/bin/phpstan analyse --level 8 --error-format=table --configuration phpstan.neon.dist src/ tests/
