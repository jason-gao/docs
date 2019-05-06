
* https://dev.mysql.com/doc/refman/5.6/en/fulltext-fine-tuning.html#fulltext-word-length

# 全文索引
## myisam
* SHOW VARIABLES LIKE 'ft_min_word_len' 
    * 默认是4，全文检索的最小许可字符
    * vim /etc/my.cnf
    * ft_min_word_len = 1
    
## innnodb
* show VARIABLES like 'innodb_ft%'
    * 默认是3
    * vim /etc/my.cnf
    * innodb_ft_min_token_size = 1
    
## 版本支持
    MyISAM
    从MySQL 4.0以上 myisam引擎就支持了full text search 全文搜索。 
    
    InnoDB
    从MySQL 5.6.4以上， InnoDB引擎支持full text search 全文搜索。 
    使用方法同上，只是建表的时候，引擎设置为ENGINE=InnoDB即可：
    
    mariadb gluster
    mysqld 10.0.24-MariaDB-wsrep 支持 innodb全文索引
    
    
## 查询示例
    SELECT * FROM content WHERE MATCH(tags) AGAINST('1,2’)

 ```
 
SELECT * FROM content;
 +----+------+
 | id | tags |
 +----+------+
 |  1 | 1,2  |
 |  2 | 2,3  |
 +----+------+
 2 rows in set (0.01 sec)
 
SELECT * FROM tag;
 +----+-------+
 | id | name  |
 +----+-------+
 |  1 | php   |
 |  2 | mysql |
 |  3 | java  |
 +----+-------+
 3 rows in set (0.00 sec)   
    
```   


## 改完配置，需要重建索引
    * https://dev.mysql.com/doc/refman/5.6/en/fulltext-fine-tuning.html#fulltext-rebuild-innodb-indexes
    * drop index and then add index

## 中文支持
* https://blog.csdn.net/qq_33663251/article/details/69612619
* https://www.jianshu.com/p/c48106149b6a



