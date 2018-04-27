
* 连接redis
    * telnet test.yundun.com 6379
    * auth xx
    * ping


* zset
    * ZADD key score member
    * 实现延时队列 https://github.com/ouqiang/delay-queue
    * zadd sortset 1 redis
    * zadd sortset 2 mongodb
    
    
* info 显示服务器当前的版本，内存，cpu，连接数等情况
    * info

* monitor
    * 监控发到服务端的命令
 
* 设置key永不过期
    * PERSIST key   http://redisdoc.com/key/persist.html
    
* 设置key固定过期时间
    * expire key seconds
    
* hset  https://redis.io/commands/hset
    * hash
    * hset key field value
    * key不存在会创建
    * field不存在会添加并返回1
    * field存在会更新并返回0