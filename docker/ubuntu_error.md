* docker push
    * docker login 先登录
    * 登录后push报错 denied: requested access to the resource is denied -> docker tag时候后面镜像的名字->/前必须是自己的docker hub的用户名

* docker-compose up
    ```
ERROR: Version in "./docker-compose.yml" is unsupported. You might be seeing this error because you're using the wrong Compose file version. Either specify a version of "2" (or "2.0") and place your service definitions under the `services` key, or omit the `version` key and place your service definitions at the root of the file to use version 1.
For more on the Compose file format versions, see https://docs.docker.com/compose/compose-file/
```
  * version需和镜像版本兼容 此处3改为可以了
  
  