* https://laravel-china.org/topics/4484/composer-mirror-use-help#reply23807
    * composer config -g repo.packagist composer https://packagist.laravel-china.org
    * composer config repo.packagist composer https://packagist.laravel-china.org
    * composer config -g --unset repos.packagist
    $ composer -vvv create-project laravel/laravel blog
    $ composer -vvv require psr/log

    
    
## 阿里云
- https://opsx.alibaba.com/mirror?lang=zh-CN
- https://mirrors.aliyun.com/composer/

## 全局
- composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

## 指定项目里执行
- composer config  repo.packagist composer https://mirrors.aliyun.com/composer/
其实就是修改项目里composer.json
"repositories": {
	"packagist": {
		"type": "composer",
		"url": "https://mirrors.aliyun.com/composer/"
	}
}
有则修改，无则添加，如果发现在项目执行全局没用，就是在项目里指定了特定的源了
    
    

## 腾讯云
- https://mirrors.cloud.tencent.com/composer/    