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
    
* composer自身更新，回滚
    * composer self-update
    * composer self-update --rollback
    
* 最常见的是维护自己 fork 的第三方库。如果你在项目中使用某些库，
并且你决定改变这些库内的某些东西，你会希望你项目中使用的是你自己的修正版本
    * https://docs.phpcomposer.com/05-repositories.html#Composer
    ```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "git@git.nodevops.cn:composergroup/rbac.git"
    }
  ],
  "require": {
    "nette/http": "v2.4.2",
    "furthestworld/rbac": "~1.0"
  }
}
```
    
    