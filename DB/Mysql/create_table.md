# mysql int
+   http://www.cnblogs.com/echo-something/archive/2012/08/26/mysql_int.html

> 显示宽度与存储大小或类型包含的值的范围无关

```
CREATE TABLE `test_t1` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

```

# json
+   https://dev.mysql.com/doc/refman/5.7/en/json.html
+   http://www.lnmp.cn/mysql-57-new-features-json.html

```
CREATE TABLE t1 (jdoc JSON);
INSERT INTO t1 VALUES('{"key1": "value1", "key2": "value2"}');

```

