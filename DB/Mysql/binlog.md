* 开启binlog
    * vim mysql.ini
    ```ini
          [mysqld] 
             ...... 
             log_bin = mysql_bin 
             ...... 
    ```
    * show variables like  '%bin%'
        * log_bin ON/OFF  ON开, OFF关

* https://dev.mysql.com/doc/refman/5.6/en/mysqlbinlog.html
        