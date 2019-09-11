* 编译扩展流程
    * phpize 根据config.m4生成configure脚本，phpize是基于autoconf的封装
    * ./configure 这个脚本是用来检测系统和环境状态，依赖库和头文件是否存在，编译配置等 
        ```bash
        
        creating libtool
        appending configuration tag "CXX" to libtool
        configure: creating ./config.status
        config.status: creating config.h
        
        ```
    * ./configure --help 查看扩展有哪些编译参数    
    * php-config
        * 这个工具执行后会打印当前PHP安装在哪里目录，API版本号是什么，扩展目录在哪里等信息。
        configure脚本需要依赖它找到PHP安装的目录
    * make
        * 用来将.c源文件编译为目标文件。
    * gcc
        * 编译器，将*.c源文件编译为目标文件。并连接所有目标文件生成swoole.so    
    * make install
        * 将编译好的扩展文件，如swoole.so安装到PHP的扩展目录下
          
          


# 安装xdebug扩展
    * https://xdebug.org/download.php
    - A list of all settings:  http://xdebug.org/docs-settings.php     
    - A list of all functions: http://xdebug.org/docs-functions.php    
    - Profiling instructions:  http://xdebug.org/docs-profiling2.php   
    - Remote debugging:        http://xdebug.org/docs-debugger.php 

* cd /usr/local/src
* wget -c https://xdebug.org/files/xdebug-2.5.5.tgz
* tar -zxvf xdebug-2.5.5.tgz
* cd xdebug-2.5.5
* phpize
* 找到php-config路径，这里是 /usr/local/php-5.6.20/bin/php-config
* ./configure --enable-xdebug --with-php-config=/usr/local/php-5.6.20/bin/php-config
* make -j 2
* make test
* make install
* vim /etc/php.ini

# pecl安装xhprof
- https://github.com/phacility/xhprof
- https://pecl.php.net/package/xhprof
- sudo wget -c http://pear.php.net/go-pear.phar
- /data/server/php-5.6.24/bin/php /data/soft/go-pear.phar
- /data/server/php-5.6.24/bin/pecl install xhprof-0.9.4
- vim /data/server/php-5.6.24/etc/php.ini
- extension=xhprof.so
- kill -USR2 4416  重启php-fpm
- php -m



```

[Xdebug]  
zend_extension="/usr/local/php-5.6.20/lib/php/extensions/no-debug-non-zts-20131226/xdebug.so"  
xdebug.profiler_enable=on   
xdebug.trace_output_dir="/usr/local/php5.6/xdebug/"  
xdebug.profiler_output_dir="/usr/local/php5.6/xdebug/"  
xdebug.remote_enable=on             
xdebug.remote_handler=dbgp            
xdebug.remote_host=192.168.5.118  
xdebug.remote_port=9999
 
```