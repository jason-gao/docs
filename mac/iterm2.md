# iterm2 保持连接不断开
- 断开原因，客户端和服务端超过一定时间没有和服务端通信
- http://bluebiu.com/blog/iterm2-ssh-session-idle.html
- vim ~/.ssh/config
```bash
Host *
    ServerAliveInterval 30
```
- ServerAliveInterval 30 #表示ssh客户端每隔30秒给远程主机发送一个no-op包，no-op是无任何操作的意思，这样远程主机就不会关闭这个SSH会话