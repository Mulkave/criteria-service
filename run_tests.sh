#!/bin/bash

echo "=> Installing dependencies"
composer install --prefer-dist --no-interaction

echo "=> running tests"
/code/vendor/bin/phpunit
