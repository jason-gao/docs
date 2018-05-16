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
-P :是容器内部端口随机映射到主机的高端口。
-p : 是容器内部端口绑定到指定的主机端口。
-d :守护进程


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
其中--it：
i，容器的标准输入保持打开
t，Docker分配一个伪终端（pseudo-tty）并绑定到容器的标准输入

--rm，运行结束后删除容器。再后面就是我们要执行的命令。
-d：后台运行

```
* sudo docker run --rm -itd -p 3000:3000 --name try-mustache -v "$(pwd)":/www -w /www  node npm start
* 指定端口
* sudo docker run --rm -it -p 3001:3001 --name try-mustache-2 -v "$(pwd)":/www -w /www  node  env PORT=3001 node server.js