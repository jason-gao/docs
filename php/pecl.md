* https://pecl.php.net/
* http://php.net/manual/zh/install.pecl.static.php

# 安装
* cd /usr/local/src 
* sudo wget -c http://pear.php.net/go-pear.phar
* php go-pear.phar
* /usr/local/php-5.6.20/bin/pecl install swoole
* pecl uninstall swoole
* 默认情况下，pecl 命令不会安装标记为 alpha 或 beta 状态的包。
    如果没有 stable 包可用，也可以用以下命令安装一个 beta 包,也可以用此命令安装一个指定的版本
* pecl install extname-beta       // beta版
* pecl install extname-0.1        // 指定版本

* 多个php版本
    * 1.
        * 执行go-pear.phar时候，用不同版本php二进制执行即可安装到对应的php版本下
        * php go-pear.phar 默认php5.6
        * /usr/local/php7.2.1/bin/php go-pear.phar
        * /usr/local/php-5.6.20/bin/pecl install
        * /usr/local/php7.2.1/bin/pecl install swoole
    * 2. https://www.jianshu.com/p/fee58d93e8b1 
        * 动态切换
        * pecl-config-switch 脚本
            ```bash
            if [[ $1 == 'php5' ]];then
                sudo pecl config-set ext_dir /usr/lib/php5/20131226
                sudo pecl config-set php_dir /usr/share/php5
                sudo pecl config-set php_bin /usr/bin/php5
            elif [[ $1 == 'php7' ]];then
                sudo pecl config-set ext_dir /usr/lib/php7/20131226
                sudo pecl config-set php_dir /usr/share/php7
                sudo pecl config-set php_bin /usr/bin/php7
            fi
  
  pecl-config-switch php5 #切换到php5的配置模式
  pecl-config-switch php7 #切换到php7的配置模式

```
        