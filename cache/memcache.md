- https://www.huceo.com/post/445.html
# error
1. 测试环境和预发布环境程序都没问题，但是预发布缓存就是不能按预期过期
    * 后来发现是预发布系统时钟的问题，慢了10分钟，导致每次过期需要多十分钟
    * 同步系统时间后好了
    
# command
## connect
telnet 127.0.0.1 11211
## list items
stats items
## list items keys
stats cachedump 7 0
## get 
get xxkey


## 注意
add
set
replace
set和replace都会重新更新到期时间