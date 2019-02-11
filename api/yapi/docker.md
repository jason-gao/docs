[docker部署](https://www.jianshu.com/p/a97d2efb23c5)

1、创建 MongoDB 数据卷
docker volume create mongo_data_yapi

2、启动 MongoDB
docker run -d --name mongo-yapi -v mongo_data_yapi:/data/db mongo

3、获取 Yapi 镜像，版本信息可在 阿里云镜像仓库 查看
docker pull registry.cn-hangzhou.aliyuncs.com/anoy/yapi

4、初始化 Yapi 数据库索引及管理员账号
docker run -it --rm \
  --link mongo-yapi:mongo \
  --entrypoint npm \
  --workdir /api/vendors \
  registry.cn-hangzhou.aliyuncs.com/anoy/yapi \
  run install-server
自定义配置文件挂载到目录 /api/config.json，官方自定义配置文件 -> 传送门

docker exec -it yapi  vi /api/config.json

5、启动 Yapi 服务
docker run -d \
  --name yapi \
  --link mongo-yapi:mongo \
  --workdir /api/vendors \
  -p 3000:3000 \
  registry.cn-hangzhou.aliyuncs.com/anoy/yapi \
  server/app.js

使用 Yapi
访问 http://localhost:3000 登录账号 admin@admin.com，密码 ymfe.org

关闭 Yapi
docker stop yapi

启动 Yapi
docker start yapi

http://192.168.5.189:3000





