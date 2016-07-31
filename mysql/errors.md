#Uncaught exception 'PDOException' with message 'SQLSTATE[HY000] [2002] No such file or directory'
> 重新编译php后连接mysql报错

> 解决：

+ mysql -u root -p
+ show variables like '%sock%'; 

```

+---------------+---------------------------+
| Variable_name | Value                     |
+---------------+---------------------------+
| socket        | /var/lib/mysql/mysql.sock |
+---------------+---------------------------+
1 row in set (0.07 sec)

```

+ php -i |grep php.ini
+ vim /usr/local/src/lnmp_auto/binary/php-5.6.24/etc/php.ini

```
 mysql.default_socket = /var/lib/mysql/mysql.sock
 pdo_mysql.default_socket = /var/lib/mysql/mysql.sock
 
```
+ service php-fpm restart

##参考
+   [http://stackoverflow.com/questions/2412009/starting-with-zend-tutorial-zend-db-adapter-throws-exception-sqlstatehy000](http://stackoverflow.com/questions/2412009/starting-with-zend-tutorial-zend-db-adapter-throws-exception-sqlstatehy000)