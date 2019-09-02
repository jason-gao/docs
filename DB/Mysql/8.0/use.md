1. 创建用户
- create user php@'%' identified by 'php';
- create user php1@'%' identified WITH mysql_native_password BY 'php1';
2. 授权
- GRANT ALL ON *.* TO 'php'@'%';
- GRANT ALL ON *.* TO 'php1'@'%';
3. 刷新权限
- flush privileges;

4. 修改加密方式
- ALTER USER 'php'@'%' IDENTIFIED WITH mysql_native_password BY 'php';