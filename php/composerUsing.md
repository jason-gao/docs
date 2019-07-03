* composer加到系统的环境变量
    * 
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

# 临时修改composer源的需求
    * 官方镜像一般比较慢，我们都会改为国内镜像https://pkg.phpcomposer.com/
    * 但是国内镜像同步更新需要时间的
    * 一般自己提交一个项目到composer官方，立即去拉取可能拉取不到，临时再讲源改为官方的解决
    * 在项目的composer.json文件里加上这个，然后composer update，更完在将这段配置去掉
    ```
    "repositories": {
            "packagist": {
                "type": "composer",
                "url": "https://packagist.org/"
            }
    }
        
    ```
    
# autoload
* https://gywbd.github.io/posts/2014/12/composer-autoload.html
 
```json


{
    "name" : "autoload-test",
    "autoload" : {
        "classmap" : ["classes/"],
        "files" : ["common/util.php"],
        "psr-4" : {
            "school\\" : "src/"
        }
    }
}

```

# version
* https://getcomposer.org/doc/articles/versions.md#tags

    
    