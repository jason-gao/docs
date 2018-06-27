* https://segmentfault.com/a/1190000004339411
* https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html#updatingPhpIni
* https://confluence.jetbrains.com/display/PhpStorm/Xdebug+Installation+Guide
* https://confluence.jetbrains.com/display/PhpStorm/Browser+Debugging+Extensions
* https://confluence.jetbrains.com/display/PhpStorm/Zero-configuration+Web+Application+Debugging+with+Xdebug+and+PhpStorm
* https://www.cnblogs.com/jice/p/5064838.html
* https://confluence.jetbrains.com/display/PhpStorm/Multi-user+debugging+in+PhpStorm+with+Xdebug+and+DBGp+proxy
* https://paper.seebug.org/308/  *****
* http://www.plqblog.com/views/article.php?id=30
* http://xxlegend.com/2017/05/23/PhpStorm%20Xdebug%E8%BF%9C%E7%A8%8B%E8%B0%83%E8%AF%95%E7%8E%AF%E5%A2%83%E6%90%AD%E5%BB%BA%E5%8E%9F%E7%90%86%E5%88%86%E6%9E%90%E5%8F%8A%E9%97%AE%E9%A2%98%E6%8E%92%E6%9F%A5/


# windows xampp
    * php5.6 + apache
* php -i > E:/YunDun/phpini.txt
* http://xdebug.org/wizard.php
    * 将phpinfo()内容copy到文本框里，会引导你安装指定xdebug扩展
    * 不过遗憾的是压根没提示我，直接告诉我php7以下的版本不支持，只能通过phpinfo里面信息判断
    * Compiler => MSVC11 (Visual C++ 2012)
      * Architecture => x86
      * Zend Extension Build => API220131226,TS,VC11
      * PHP Extension Build => API20131226,TS,VC11
      * 由此可以判断  PHP 5.6 VC11 TS (32 bit) https://xdebug.org/files/php_xdebug-2.5.5-5.6-vc11.dll
      * https://xdebug.org/download.php
*  将php_xdebug-2.5.5-5.6-vc11.dll copy到 F:\soft\xampp-php5.6.20\php\ext
   * php.ini
      ```php.ini
        [Xdebug]
        zend_extension="F:\soft\xampp-php5.6.20\php\ext\php_xdebug-2.5.5-5.6-vc11.dll"
        xdebug.remote_enable=1
        xdebug.remote_host=127.0.0.1
        xdebug.remote_port=9000
        xdebug.profiler_enable=1
        xdebug.profiler_output_dir="E:\YunDun"
        xdebug.idekey="PHPSTORM"
        xdebug.collect_includes = 1
        xdebug.collect_params = 1
        xdebug.collect_return = 1

    ```
    * 重启apache
    
* Xdebug helper chrome插件
    * https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc?hl=zh-CN
    * 点debug
* 配置phpstorm xdebug
    * 每个项目都配置单独的server和configuration
    * 配置server settings->php->servers
    * edit configuration 添加web application项目->选择刚添加的server，入口默认是/
    * 选择server
    * 点电话图标 监听xdebug
    * 点小虫子
* 快捷键
    * F7：步入
      F8：跳过
      Shift + F8：步出
      Alt + F9：调到光标处
    
# centos 6.7
    * openresty-1.9.15.1 + php5.6.24 + mariadb
* php -i > /tmp/php.ini.txt
* https://xdebug.org/download.php
    * https://xdebug.org/files/xdebug-2.5.3.tgz
```
    Zend Extension Build => API220131226,NTS
    17 PHP Extension Build => API20131226,NTS
```

* https://xdebug.org/files/xdebug-2.5.5.tgz
* 安装扩展见[php5.6extension.md](php5.6extension.md)
* 配置


# xdebug性能分析
    * https://github.com/jokkedk/webgrind
    
# xdebug远程调试
    * https://blog.csdn.net/samxx8/article/details/8275935
    * http://blog.k-res.net/archives/2078.html
    * https://www.mnstory.net/2017/10/14/phpstorm-remote-debug-with-xdebug
    * https://www.awaimai.com/1029.html

    
