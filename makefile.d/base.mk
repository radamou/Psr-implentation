OS := $(shell)

CURRENT_DIR=$(patsubst %/,%,$(dir $(realpath $(firstword $(MAKEFILE_LIST)))))
DIR_BASENAME=$(shell basename $(CURRENT_DIR))

DOCKER_PS=docker ps

ifeq ($(DIR_BASENAME), Psr-implentation)
	ROOT_DIR=$(CURRENT_DIR)
else
	ROOT_DIR=$(realpath $(CURRENT_DIR)/..)
endif

BUILD_DIR=$(ROOT_DIR)/.build
BIN_DIR=$(ROOT_DIR)/bin

CODE_QUALITY_DIR=$(ROOT_DIR)/docker/code-quality
BUILD_CODE_QUALITY_IMAGE=docker build -f $(CODE_QUALITY_DIR)/Dockerfile .
RUN_QUALITY=docker run --rm -t -v $(ROOT_DIR):/src -w /src psr:code-quality