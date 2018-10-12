* docker network create redmine_network
* docker run -d --name mariadb --net=redmine_network \
      -e ALLOW_EMPTY_PASSWORD=yes \
      bitnami/mariadb
* docker run -d --name redmine --net=redmine_network -p 8081:3000 \
      bitnami/redmine      
* docker run -it --rm     --network=redmine_network      bitnami/mariadb:latest mysql  -u root
    * https://github.com/bitnami/bitnami-docker-mariadb/issues
    * ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/opt/bitnami/mariadb/tmp/mysql.sock' (2 "No such file or directory")
* docker exec -it 635e08de1743 bash
    * mysql -uroot -p
    * show databases;
    * use bitnami_redmine;
    * show tables;
    * desc users \G;
    * GRANT ALL ON *.* TO 'root'@'%';    
    
* 重置管理员用户密码为password
* sha1(sha1(salt+new_password)
* http://www.redmine.org/projects/redmine/wiki/FAQ/
```

UPDATE users SET \
hashed_password='353e8061f2befecb6818ba0c034c632fb0bcae1b' \
WHERE login='user';
UPDATE users SET salt='' WHERE login='user';

```

* http://192.168.5.189:8081/
       
      