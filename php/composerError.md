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