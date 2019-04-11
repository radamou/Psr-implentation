#!/usr/bin/env bash

php /usr/local/lib/php-code-quality/composer.phar $@
STATUS=$?
return $STATUS