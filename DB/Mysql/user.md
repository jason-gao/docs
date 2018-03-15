## 创建用户
+   http://www.cnblogs.com/zeroone/articles/2298942.html
CREATE USER 'username'@'host' IDENTIFIED BY 'password';

--example: 
CREATE USER 'php'@'%' IDENTIFIED BY 'xx';

## 授权
GRANT privileges ON databasename.tablename TO 'username'@'host'

--example:
GRANT ALL ON *.* TO 'php'@'%';

## 刷新权限

--example
flush privileges;

## 删除用户

--example
drop user 'php'@'%';


## 查看用户是否创建
use mysql;
desc user;
mysql> desc user;
+------------------------+-----------------------------------+------+-----+-----------------------+-------+
| Field                  | Type                              | Null | Key | Default               | Extra |
+------------------------+-----------------------------------+------+-----+-----------------------+-------+
| Host                   | char(60)                          | NO   | PRI |                       |       |
| User                   | char(16)                          | NO   | PRI |                       |       |
| Password               | char(41)                          | NO   |     |                       |       |
| Select_priv            | enum('N','Y')                     | NO   |     | N                     |       |
| Insert_priv            | enum('N','Y')                     | NO   |     | N                     |       |
| Update_priv            | enum('N','Y')                     | NO   |     | N                     |       |
| Delete_priv            | enum('N','Y')                     | NO   |     | N                     |       |
| Create_priv            | enum('N','Y')                     | NO   |     | N                     |       |
| Drop_priv              | enum('N','Y')                     | NO   |     | N                     |       |
| Reload_priv            | enum('N','Y')                     | NO   |     | N                     |       |
| Shutdown_priv          | enum('N','Y')                     | NO   |     | N                     |       |
| Process_priv           | enum('N','Y')                     | NO   |     | N                     |       |
| File_priv              | enum('N','Y')                     | NO   |     | N                     |       |
| Grant_priv             | enum('N','Y')                     | NO   |     | N                     |       |
| References_priv        | enum('N','Y')                     | NO   |     | N                     |       |
| Index_priv             | enum('N','Y')                     | NO   |     | N                     |       |
| Alter_priv             | enum('N','Y')                     | NO   |     | N                     |       |
| Show_db_priv           | enum('N','Y')                     | NO   |     | N                     |       |
| Super_priv             | enum('N','Y')                     | NO   |     | N                     |       |
| Create_tmp_table_priv  | enum('N','Y')                     | NO   |     | N                     |       |
| Lock_tables_priv       | enum('N','Y')                     | NO   |     | N                     |       |
| Execute_priv           | enum('N','Y')                     | NO   |     | N                     |       |
| Repl_slave_priv        | enum('N','Y')                     | NO   |     | N                     |       |
| Repl_client_priv       | enum('N','Y')                     | NO   |     | N                     |       |
| Create_view_priv       | enum('N','Y')                     | NO   |     | N                     |       |
| Show_view_priv         | enum('N','Y')                     | NO   |     | N                     |       |
| Create_routine_priv    | enum('N','Y')                     | NO   |     | N                     |       |
| Alter_routine_priv     | enum('N','Y')                     | NO   |     | N                     |       |
| Create_user_priv       | enum('N','Y')                     | NO   |     | N                     |       |
| Event_priv             | enum('N','Y')                     | NO   |     | N                     |       |
| Trigger_priv           | enum('N','Y')                     | NO   |     | N                     |       |
| Create_tablespace_priv | enum('N','Y')                     | NO   |     | N                     |       |
| ssl_type               | enum('','ANY','X509','SPECIFIED') | NO   |     |                       |       |
| ssl_cipher             | blob                              | NO   |     | NULL                  |       |
| x509_issuer            | blob                              | NO   |     | NULL                  |       |
| x509_subject           | blob                              | NO   |     | NULL                  |       |
| max_questions          | int(11) unsigned                  | NO   |     | 0                     |       |
| max_updates            | int(11) unsigned                  | NO   |     | 0                     |       |
| max_connections        | int(11) unsigned                  | NO   |     | 0                     |       |
| max_user_connections   | int(11) unsigned                  | NO   |     | 0                     |       |
| plugin                 | char(64)                          | YES  |     | mysql_native_password |       |
| authentication_string  | text                              | YES  |     | NULL                  |       |
| password_expired       | enum('N','Y')                     | NO   |     | N                     |       |
+------------------------+-----------------------------------+------+-----+-----------------------+-------+

select host,user,Select_priv,Insert_priv,Update_priv,Delete_priv,Create_priv,Drop_priv,Alter_priv from user;

+-------------+------+-------------+-------------+-------------+-------------+-------------+-----------+------------+
| host        | user | Select_priv | Insert_priv | Update_priv | Delete_priv | Create_priv | Drop_priv | Alter_priv |
+-------------+------+-------------+-------------+-------------+-------------+-------------+-----------+------------+
| localhost   | root | Y           | Y           | Y           | Y           | Y           | Y         | Y          |
| test-server | root | Y           | Y           | Y           | Y           | Y           | Y         | Y          |
| 127.0.0.1   | root | Y           | Y           | Y           | Y           | Y           | Y         | Y          |
| ::1         | root | Y           | Y           | Y           | Y           | Y           | Y         | Y          |
| localhost   |      | N           | N           | N           | N           | N           | N         | N          |
| test-server |      | N           | N           | N           | N           | N           | N         | N          |
+-------------+------+-------------+-------------+-------------+-------------+-------------+-----------+------------+
6 rows in set (0.00 sec)



