* https://github.com/bitnami/bitnami-docker-redmine


## 查看docker网络情况
docker network ls |awk '{print $2}'|xargs docker inspect

