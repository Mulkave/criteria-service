#!/bin/bash

echo "=> Installing dependencies"
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
composer install --prefer-dist --no-interaction

echo "=> running tests"
/code/vendor/bin/phpunit
