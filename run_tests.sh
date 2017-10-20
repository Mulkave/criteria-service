#!/bin/bash

echo "=> Installing dependencies"
php composer.phar install --prefer-dist --no-interaction

echo "=> running tests"
/code/vendor/bin/phpunit
