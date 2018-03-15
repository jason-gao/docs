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
    