# php-fpm重启

* 发信号
    * ps -ef |grep php-fpm 查看主进程id
    * kill -USR2 主进程id
    
* 服务化
    * 拿php5.6,centos举例
    * cd /data/soft/php-5.6.24/sapi/fpm
    * cp init.d.php-fpm /etc/init.d/php-fpm
    * chmod +x /etc/init.d/php-fpm
    * chkconfig --add php-fpm
    * chkconfig php-fpm on
    * /sbin/service php-fpm restart/start/stop
    
    
    
- php7 php-fpm error_log
- https://github.com/rlerdorf/php7dev/issues/48

```text


I was able to activate it, if anyone needs, just follow these steps:

1: edit:
sudo vim /usr/local/etc/php-fpm.d/www.conf

2: add to the end of the file:

catch_workers_output = yes

php_flag[display_errors] = on
php_admin_value[error_log] = /var/log/fpm-php.www.log
php_admin_flag[log_errors] = on
3: create the log file, so php-fpm can write on it:
touch /var/log/fpm-php.www.log && chmod 777 /var/log/fpm-php.www.log

and then you can see all errors/warnings/etc using:
tail -f /var/log/fpm-php.www.log


```    