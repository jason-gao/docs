* docker push
    * docker login 先登录
    * 登录后push报错 denied: requested access to the resource is denied -> docker tag时候后面镜像的名字->/前必须是自己的docker hub的用户名

* docker-compose up
    ```
ERROR: Version in "./docker-compose.yml" is unsupported. You might be seeing this error because you're using the wrong Compose file version. Either specify a version of "2" (or "2.0") and place your service definitions under the `services` key, or omit the `version` key and place your service definitions at the root of the file to use version 1.
For more on the Compose file format versions, see https://docs.docker.com/compose/compose-file/

```
    * version需和镜像版本兼容 此处3改为可以了
 

* mbind: Operation not permitted mysql 8.0
* mysqld: File '/var/log/dnmp/mysql.slow.log' not found (OS errno 13 - Permission denied)
* Could not use /var/log/dnmp/mysql.slow.log for logging (error 13 - Permission denied). Turning logging off for the server process. To turn it on again: fix the cause, then either restart the query logging by using "SET GLOBAL SLOW_QUERY_LOG=ON" or restart the MySQL server
 
  