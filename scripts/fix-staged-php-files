#!/bin/sh

PHP_CS_FIXER="vendor/bin/php-cs-fixer"

if [ -x vendor/bin/php-cs-fixer ]; then
    git status --porcelain | grep -e '^[AM].*.php$' | cut -c 3- | while read line; do
        echo "$PHP_CS_FIXER $line"
        $PHP_CS_FIXER fix "$line" -q;
        git add "$line";
    done
else
    echo ""
    echo ">> php-cs-fixer was not found, please run: composer update --dev"
    echo ""
fi
