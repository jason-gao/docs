* https://redis.io/commands/multi

* multi 开启事务
* set a 1 set操作
* get a get操作
* exec 提交

* discard 回滚

* 开启事务后，phpredis操作返回值是redis对象，代码里的逻辑判断如何处理？如果需要判断用返回getLastError函数获取上次返回错误
```
Redis Object
(
    [socket] => Resource id #137
)
```
    
* 命令行开启事务后，操作返回值是QUEUED


* 开启事务后 如果有任意命令报错了
  redis自动discard了
  即使你后面再exec
  之前的都会被丢弃

* example:
```
multi
set a 2
get
exec
```
* a的2值是不会写入的
* 程序里压根不用自己discard，如果之前有错误，自动discard


