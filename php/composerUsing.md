* 加到composer.json的require-dev
    * composer require  phpunit/phpunit ~4.0 --dev

* branch alias
```
    "extra": {
            "branch-alias": {
                "dev-master": "2.4-dev"
            }
        }
```

* https://getcomposer.org/doc/articles/aliases.md#branch-alias
* https://docs.phpcomposer.com/articles/aliases.html


* composer update
    * 指定php版本更新composer
    * /usr/local/php7.2.1/bin/php /usr/local/bin/composer update