FROM vinelab/nginx-php

MAINTAINER Abed Halawi <abed.halawi@vinelab.com>

RUN apk add --no-cache php5-bcmath

COPY . /code
