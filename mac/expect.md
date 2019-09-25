- https://blog.csdn.net/jerome_s/article/details/77351507
- https://www.jianshu.com/p/70556b1ce932
- https://www.cnblogs.com/caoguo/p/4865413.html
- https://www.jianshu.com/p/017164e2504a
- https://www.jianshu.com/p/17e06b3887ae

```bash

//首先MAC要安装expect( brew install expect),然后，编写下面的脚本文件保存
#!/usr/bin/expect -f
#设置超时时间
set timeout 3
#这里设置了跳板机的密码
set password "你的跳板机密码"
#连接跳板机
spawn ssh 用户名@跳板机IP

#如果返回的内容包含*yes/no*,发送yes
expect "*yes/no*" {send "yes\n"}
#如果返回的内容包含"*password*",发送你设置的密码+\r(PS.这里的\r一定要加，是回车操作的意思。。。在网上搜了好多没有说明，一直以为是换行，没有加这个，结果一直执行不成功)
expect "*password:*" {send "$password\r;"}
#登录跳板机成功，如果返回的内容包含"*你的跳板机的名称*",发送连接测试机的命令
expect "*能匹配跳板机名称的字符串*" {send "ssh 测试服务器的用户名@测试服务的IP\r";}
#同上面一样。。。注意interact是留在测试机上，给用户控制权限，如果不写会直接退出
expect "*password:*" {send "你的密码\r";interact}
#保存为 login.sh 执行 expect login.sh
#终于不用手输两次密码了.....


```
