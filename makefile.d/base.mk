OS := $(shell)

CURRENT_DIR=$(patsubst %/,%,$(dir $(realpath $(firstword $(MAKEFILE_LIST)))))
DIR_BASENAME=$(shell basename $(CURRENT_DIR))

ifeq ($(DIR_BASENAME), Psr-implentation)
	ROOT_DIR=$(CURRENT_DIR)
else
	ROOT_DIR=$(realpath $(CURRENT_DIR)/..)
endif

BUILD_DIR=$(ROOT_DIR)/.build
BIN_DIR=$(ROOT_DIR)/bin


RUN_QUALITY=docker run --rm -t -v $(CURRENT_DIR):/src -w /src psr/code-quality