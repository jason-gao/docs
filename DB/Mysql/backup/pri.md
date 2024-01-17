当操作mysql权限和用户的时候，是一个高危的动作，需要做好备份

在MySQL中，用户相关的信息通常存储在`mysql.user`表中，而数据库相关的信息存储在`mysql.db`表中。当执行`CREATE USER`或`GRANT`语句时，这些表会被更新以反映用户权限的变化。

以下是这些表的简要解释：

1. **`mysql.user`表：**
   - 存储用户账户信息，包括登录凭据和全局权限。
   - 相关列包括`Host`、`User`以及各种`*_priv`列，表示不同的权限（例如`Select_priv`、`Insert_priv`等）。

2. **`mysql.db`表：**
   - 存储用户在特定数据库中的权限。
   - 相关列包括`Host`、`Db`以及各种`*_priv`列，表示特定数据库的不同权限。

当执行`CREATE USER`语句时，它会在`mysql.user`表中添加一条新记录。当执行`GRANT`语句时，根据您是授予全局权限还是特定数据库权限，它会在`mysql.user`和`mysql.db`表中更新现有记录或插入新记录。

如果您想备份用户账户及其权限，您应该考虑同时备份`mysql.user`和`mysql.db`表。

以下是一些建议：
- 备份`mysql.user`表，以保存用户账户和全局权限。
- 备份`mysql.db`表，以保存用户在特定数据库中的权限。

这样，您就可以在需要时还原这些表，从而还原用户及其相应的权限。


# 备份mysql.user表
mysqldump -u your_username -p your_password --skip-lock-tables --no-create-info --no-create-db --skip-triggers --compact mysql user > user_backup.sql

# 备份mysql.db表
mysqldump -u your_username -p your_password --skip-lock-tables --no-create-info --no-create-db --skip-triggers --compact mysql db > db_backup.sql

上述命令使用了--no-create-info，--no-create-db和--skip-triggers来仅备份数据而不包含表结构和触发器，这些选项可以根据需要进行调整。


回滚
# 回滚mysql.user表
mysql -u your_username -p your_password mysql < user_backup.sql

# 回滚mysql.db表
mysql -u your_username -p your_password mysql < db_backup.sql
