hello:
	@echo "Hello!!!"

clean-cache:
	@rm -rf apps/*/*/var
	@docker exec qm-php ./apps/backoffice/backend/bin/console cache:warmup
