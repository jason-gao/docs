+   https://dev.mysql.com/doc/refman/5.7/en/charset-applications.html
+   http://imysql.com/charset_tips

```
CREATE DATABASE xx
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;
```
create database wp default character set utf8 default collate utf8_general_ci;

create database laravel default character set utf8mb4 default collate utf8mb4_unicode_ci;