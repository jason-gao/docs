* https://laravel-china.org/topics/4484/composer-mirror-use-help#reply23807
    * composer config -g repo.packagist composer https://packagist.laravel-china.org
    * composer config repo.packagist composer https://packagist.laravel-china.org
    * composer config -g --unset repos.packagist
    $ composer -vvv create-project laravel/laravel blog
    $ composer -vvv require psr/log