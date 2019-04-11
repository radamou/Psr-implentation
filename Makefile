INCLUDES_DIR=./makefile.d
include $(INCLUDES_DIR)/base.mk

include $(INCLUDES_DIR)/configure.mk $(INCLUDES_DIR)/cs-php.mk $(INCLUDES_DIR)/cs-yaml.mk $(INCLUDES_DIR)/composer.mk

.PHONY: help

help:
	@echo "Please use \`make <target>' where <target> is one of"
	#@echo "  run|update|stop|clean          see eris makefile for informations"
	@echo "  run-quality-image                  run code quality image in order to run tests"
	@echo "  code-quality                       run all cs tests"

.PHONY: code-quality build-image

build-image:
	docker build -t

run-quality-image:

code-quality: test-unit-php fix-php-fixer php-stan

test-unit-php:

fix-php-fixer:

php-stan:
