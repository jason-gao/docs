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



# 5.6严格模式
+   SQLSTATE[HY000]: General error: 1364 Field 'record_status' doesn't have a default value
1. 分空字段，必须给默认值， 否则报错
+   SQLSTATE[HY000]: General error: 1449 The user specified as a definer ('php'@'192.168.3.%') does not exist
1. 见trigger.md


## 连接错误：
    * host或者port不对
        * PDOException
        * message: 
            * host/port: SQLSTATE[HY000] [2002] Connection refused
            * host: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: Name or service not known
        * code: 2002
    * username或者password不对
        * PDOException
        * message: SQLSTATE[HY000] [1045] Access denied for user 'php1'@'192.168.5.188' (using password: YES)
        * code: 1045
        
        
        
## 外键
    * errno: 150 "Foreign key constraint is incorrectly formed"
            * 字段类型和长度必须一致
            * 如果非主键一定要加上索引
    * errno: 121 "Duplicate key on write or update"

## pdo error
   * SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens
               