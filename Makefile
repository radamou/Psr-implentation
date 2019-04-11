INCLUDES_DIR=./makefile.d
include $(INCLUDES_DIR)/base.mk
include $(INCLUDES_DIR)/php-cs.mk $(INCLUDES_DIR)/php-stan.mk

.PHONY: help

help:
	@echo "Please use \`make <target>' where <target> is one of"
	@echo "  run-quality-image                  run code quality image in order to run tests"
	@echo "  code-quality                       run all cs tests"

.PHONY: code-quality build-image

build-image:
	docker build -t

code-quality: test-unit-php fix-php-fixer php-stan

test-unit-php:
	$(BUILD_CODE_QUALITY_IMAGE)
	$(RUN_QUALITY)

fix-php-fixer:
	$(BUILD_CODE_QUALITY_IMAGE)

php-stan:
	$(BUILD_CODE_QUALITY_IMAGE)
