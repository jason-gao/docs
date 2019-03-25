# find_in_set
+   http://www.cnblogs.com/mike0923/archive/2012/08/14/2638516.html

> 解决问题：
+   like只能模糊搜索的问题

> Legend:
+   字符串存储必须是,分隔
+   支持精确搜索
+   ,分隔的字符串用不上索引


> DDL
```
CREATE TABLE `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `emails` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `e` (`emails`) USING BTREE,
  KEY `u` (`user_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
```


```
SELECT * FROM users WHERE user_name = '小王1' and find_in_set('aa@email.com', emails);


truncate table users;
INSERT INTO users(user_name, emails) VALUES('小张','a@email.com,b@email.com,c@email.com');
INSERT INTO users(user_name, emails) VALUES('小王1','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王2','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王3','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王4','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王5','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王6','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王7','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王8','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王9','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王1','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王2','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王3','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王4','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王5','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王6','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王7','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王8','aa@email.com,bb@email.com,cc@email.com');
INSERT INTO users(user_name, emails) VALUES('小王9','aa@email.com,bb@email.com,cc@email.com');

```

# SUBSTRING_INDEX
* https://stackoverflow.com/questions/25037147/using-a-substring-index-in-a-where-clause-for-mysql
```mysql
    SELECT 
    SUBSTRING_INDEX(phone,'-',2) AS PNumber, 
    SUBSTRING_INDEX(phone,'-', -1) AS Ext, 
    phone FROM tb_user  
    WHERE ucid=271338;
    +--------------+------+-------------------+  
    | PNumber      |  Ext |       phone       |  
    +--------------+------+-------------------+  
    | 010-88888882 | 5612 | 010-88888882-5612 |  
    +--------------+------+-------------------+  
```

# 替换字段内容
update xx set info = replace(info, 'CDN网络', '性能优化');