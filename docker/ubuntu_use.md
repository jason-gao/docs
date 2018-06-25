* https://hub.docker.com/
* https://www.keakon.net/2016/03/07/Docker%E5%AD%A6%E4%B9%A0%E5%90%8E%E8%AE%B0

# 运行一个web应用
* docker pull training/webapp
* docker run -d -P training/webapp python app.py  自动映射宿主机端口
* docker run -d -p 5000:5000 training/webapp python app.py 指定端口
* docker ps
```
CONTAINER ID        IMAGE               COMMAND             CREATED             STATUS              PORTS                     NAMES
d37a7975ad1f        training/webapp     "python app.py"     2 minutes ago       Up 2 minutes        0.0.0.0:5000->5000/tcp    adoring_zhukovsky
c295440e2c3d        training/webapp     "python app.py"     4 minutes ago       Up 4 minutes        0.0.0.0:32768->5000/tcp   angry_edison
```
* http://192.168.5.189:5000
* http://192.168.5.189:32768
* docker port c295440e2c3d
    * 5000/tcp -> 0.0.0.0:32768  docker 5000端口，宿主机是32768
* docker port angry_edison
* docker logs -f c295440e2c3d
* docker top angry_edison
* docker stats -a
* docker inspect angry_edison
* docker stop angry_edison
* docker start angry_edison
* docker restart angry_edison
* docker rm angry_edison  删除容器时，容器必须是停止状态
* docker ps -l 最后一次创建的容器


* 参数说明：
    * -P :是容器内部端口随机映射到主机的高端口
    * -p :是容器内部端口绑定到指定的主机端口  Publish a container's port(s) to the host 
        * docker run --name nginx-server1 -d -p 8081:80 nginx 8081宿主机端口 80是docker容器端口
    * -d :守护进程


# 运行nginx
* docker pull nginx
* mkdir -p ~/nginx/www ~/nginx/logs ~/nginx/conf
* cd ~
* docker run -d -p 81:81 --name jasong_nginx nginx
 
# 运行nodejs web
* docker pull node

* docker run [OPTIONS] IMAGE [COMMAND] [ARG...] [flags]
* docker run -it --rm node node --version

```
-i，容器的标准输入[STDIN]保持打开

-t，Docker分配一个伪终端（pseudo-tty）并绑定到容器的标准输入

--rm，运行结束后删除容器。再后面就是我们要执行的命令。

-d：后台运行

```
* sudo docker run --rm -itd -p 3000:3000 --name try-mustache -v "$(pwd)":/www -w /www  node npm start
* 指定端口
* sudo docker run --rm -it -p 3001:3001 --name try-mustache-2 -v "$(pwd)":/www -w /www  node  env PORT=3001 node server.js


* mysql官方镜像的使用
    * https://itbilu.com/linux/docker/EyP7QP86M.html
        * 启动一个mysql服务器实例
            * docker pull mysql
            * docker run --name itbilu-mysql -e MYSQL_ROOT_PASSWORD=my-pass -d mysql:5.7
            * docker ps
        * 在其它Docker容器中应用中连接MySQL
            * docker run --name some-app --link itbilu-mysql:mysql -d application-that-uses-mysql
        * MySQL命令行客户端连接MySQL    
            * docker run -it --link itbilu-mysql:mysql --rm mysql sh -c 'exec mysql -h"$MYSQL_PORT_3306_TCP_ADDR" -P"$MYSQL_PORT_3306_TCP_PORT" -uroot -p"$MYSQL_ENV_MYSQL_ROOT_PASSWORD"'
        * 在Shell中访问容器及日志查看    
            * docker exec -it itbilu-mysql bash
            * docker logs itbilu-mysql
        * 使用自定义MySQL配置文件
            * docker run --name itbilu-mysql -v /my/custom:/etc/mysql/conf.d -e MYSQL_ROOT_PASSWORD=my-pass -d mysql:5.7
            * docker run --name itbilu-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:tag --character-set-server=utf8mb4 --collation-server=utf8mb4_unicode_ci
            * docker run -it --rm mysql:tag --verbose --help
        * 环境变量
        ```
        MYSQL_ROOT_PASSWORD：必须。用于设置MySQLroot用户的密码
        MYSQL_DATABASE：可选。用于指定镜像启动容器时要创建的数据库。如果提供了用户/密码，则会将该用户做为此数据库的超级用户。
        MYSQL_USER，MYSQL_PASSWORD：可选。用于创建一个新用户并设置密码。
        MYSQL_ALLOW_EMPTY_PASSWORD：可选。设置为yes时，则可以使用空密码登录
        MYSQL_RANDOM_ROOT_PASSWORD：可选。设置为yes时会为root用户设置一个随机密码（使用pwgen），所生成的随机密码会被输出到stdout
        MYSQL_ONETIME_PASSWORD：可选。为root用户指定一个一次性密码，该密码会在用户首次登录时强制修改
        ```
        * 关于数据存储
            * docker run --name itbilu-mysql -v /my/own/datadir:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:tag
            * docker exec some-mysql sh -c 'exec mysqldump --all-databases -uroot -p"$MYSQL_ROOT_PASSWORD"' > /some/path/on/your/host/all-databases.sql

* 使用 Docker 部暑Node.js应用
    * https://itbilu.com/linux/docker/V1Y3XjmoG.html
        * express -e express-app
        * cd express-app
        * touch Dockerfile
        * vim Dockerfile
        ```
        # Express-App
        #
        # VERSION  1.0.0
        
        FROM node:latest
        
        RUN mkdir -p /home/www/express-app
        WORKDIR /home/www/express-app
        
        COPY . /home/www/express-app
        RUN npm install
        
        EXPOSE 3000
        CMD ["npm", "start"]
        ```
        * sudo docker build -t jasong/express-app .
        * sudo docker history jasong/express-app
        * sudo docker run -d --name experss-app -p 3003:3000 jasong/express-app
        * sudo docker ps
        * http://127.0.0.1:3003
            * Welcome to Express
        * 基于镜像部暑应用
            * docker login
            * docker tag jasong/express-app:latest xyui/express-app
            * sudo docker push xyui/express-app
                * 异地部署
                * docker pull
                * docker run -d --name express-app -p 3000:3000 xyui/express-app
        * 基于Dockerfile部暑应用
            * git clone  xxx
            * 进到Dockerfile目录
            * sudo docker build -t express-app .
            * sudo docker run -d --name express-app -p 80:3000 express-app