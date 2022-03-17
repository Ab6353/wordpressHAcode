#!/bin/bash
isExistApp=pgrep httpd
if [[ -n $isExistApp ]]; then
systemctl stop nginx
fi

isExistApp=pgrep php-fpm
if [[ -n $isExistApp ]]; then
systemctl stop php7.4-fpm.service
fi
