* RuntimeException
    * Could not delete /xx/vendor/phpunit/phpunit/.git/objects/pack/tmp_pack_2I8bbF:
    * https://stackoverflow.com/questions/26216437/error-could-not-delete-with-composer-on-vagrant
    ```
    1. Increase composer process-timeout (default 300) (not really needed if the following settings will help you gain speed, but can't hurt)
    2. Set dist as preferred install type.
    3. Enable https protocol for github, which is faster.
    4. ~/.composer/config.json
    
    ```
    ```json
    {
        "config": {
            "process-timeout":      600,
            "preferred-install":    "dist",
            "github-protocols":     ["https"]
        }
    }
    ```
    * composer update --prefer-dist
    
    
###### composer require composer.lock is satisfiable but these conflict with your requirements or minimum-stability

- resolve: https://github.com/composer/composer/issues/5211
- http://webtips.krajee.com/setting-composer-minimum-stability-application/
    
## composer version not match
- https://codeday.me/bug/20190304/708831.html
```text
composer install --ignore-platform-reqs
```    
```json
{
    "config": {
        "platform":{
            "php":"5.5"
        }
    }
}
```

#####

Failed to decode response: zlib_decode(): data error
Retrying with degraded mode, check https://getcomposer.org/doc/articles/troubleshooting.md#degraded-mode for more info

- https://getcomposer.org/doc/articles/troubleshooting.md#degraded-mode
    