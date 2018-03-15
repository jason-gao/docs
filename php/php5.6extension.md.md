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
* make
* make test
* make install
* vim /etc/php.ini
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