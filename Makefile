hello:
	@echo "Hello titii!"

clean-cache:
    php apps/backoffice/backend/bin/console cache:warmup
