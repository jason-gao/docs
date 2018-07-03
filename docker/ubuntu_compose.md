* https://yeasy.gitbooks.io/docker_practice/compose/introduction.html

# 安装wordpress
    * https://yeasy.gitbooks.io/docker_practice/compose/wordpress.html
    
    ```
    apt install docker-compose
    mkdir -p /usr/local/src/dockerCompose/wordpress && cd /usr/local/src/dockerCompose/wordpress
    vim stack.yml
    
   ```
version: "3.1"
services:

  db:
    image: mysql:5.7
    volumes:
      - db_data:/var/lib/mysql
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: 123456
      MYSQL_DATABASE: wordpress
      MYSQL_USER: wordpress
      MYSQL_PASSWORD: wordpress

  wordpress:
    depends_on:
      - db
    image: wordpress:latest
    ports:
      - "8000:80"
    restart: always
    environment:
      WORDPRESS_DB_HOST: db:3306
      WORDPRESS_DB_USER: wordpress
      WORDPRESS_DB_PASSWORD: wordpress
volumes:
   db_data:
           
    ```
    * docker-compose -f stack1.yml config 验证配置文件
    * docker-compose -f stack.yml up 启动容器
    * docker-compose -f stack.yml restart 重启服务
    
    * http://192.168.5.189:8000 安装后可以访问
    * http://192.168.5.189:8000/wp-admin/index.php
    * http://192.168.5.189:8000
    