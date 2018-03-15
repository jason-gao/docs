
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