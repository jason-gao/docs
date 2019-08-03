- https://brickyang.github.io/2017/01/14/CentOS-7-%E5%AE%89%E8%A3%85-Shadowsocks-%E5%AE%A2%E6%88%B7%E7%AB%AF/
- https://note.youdao.com/ynoteshare1/index.html?id=2dd8c4275c25bd3eec4abeec4e8bf844&type=note?auto
- https://note.youdao.com/ynoteshare1/index.html?id=2023fcf99faa0d1884f88774874b1be0&type=note


#python环境安装
# 自动安装
curl -L https://raw.githubusercontent.com/yyuu/pyenv-installer/master/bin/pyenv-installer | bash

#安装成功后记得在 .bashrc 或者 .bash_profile 中添加三行来开启自动补全
export PATH="$HOME/.pyenv/bin:$PATH"
eval "$(pyenv init -)"
eval "$(pyenv virtualenv-init -)"

下载慢把文件[Python-3.6.5.tar.xz,get-pip.py]copy到cache目录在install(pyenv install 3.6.5)
/root/.pyenv/cache/

pyenv install 3.6.5
pyenv global 3.6.5 切换py环境

# shadowsocks安装
pip install --upgrade pip
pip install shadowsocks
sslocal -c /etc/shadowsocks.json 启动sock5代理客户端

nohup sslocal -c /etc/shadowsocks.json /dev/null 2>&1 &
echo " nohup sslocal -c /etc/shadowsocks.json /dev/null 2>&1 &" /etc/rc.local   #设置自启动


# 代理安装
yum install -y privoxy 安装proxy
/usr/sbin/privoxy --user privoxy /etc/privoxy/config
注释打开：
listen-address 127.0.0.1:8118   
forward-socks5t / 127.0.0.1:1080 . 
记录改为配置文件需要重启进程，如果不小心启动了多个进程，需要杀掉


# 走代理
export http_proxy=http://127.0.0.1:8118  
export https_proxy=http://127.0.0.1:8118

# 测试
curl --socks5 127.0.0.1:1080 http://httpbin.org/ip -v
curl www.google.com -v
