* composer phpunit
    * 安装了多版本php执行phpunit
    * vendor/bin/phpunit实际上执行的是vendor/phpunit/phpunit/phpunit
    * php721 /mnt/hgfs/YunDun/yundun-mcs/vendor/phpunit/phpunit/phpunit
    * php721 /mnt/hgfs/YunDun/jason-gao/phpcomponent-whiteList/vendor/phpunit/phpunit/phpunit
    * 或者修改xx/vendor/phpunit/phpunit/phpunit #!/usr/bin/env php->#!/usr/bin/env php721
    
* 测试覆盖率
    1. 装xdebug扩展
    2. phpunit添加logger配置
    ```
 <logging>
        <log type="coverage-html" target="./tests/coverage/html"/>
 </logging>
 
```
    