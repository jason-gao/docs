# 回到上次目录 cd -

# 家目录 cd ~
    * root /root
    * 普通用户 /home/xx用户

# 查看cpu信息 more /proc/cpuinfo

# 查看内存：cat /proc/meminfo
    * 或者top后按1

# 查看硬盘情况
    * df -h

# 查找nginx主进程
    * ps -ef | grep "nginx: master process" | grep -v "grep" | awk -F ' ' '{print $2}'
# 查看gcc编译器版本
    * gcc -v
# 查看具体进程名：经常用于监控：
    * ps -ef |awk '{print $8}' |grep -e '^ypf:swoole-worker-0$'

# 查看centos具体版本
    * cat /etc/redhat-release   response:CentOS release 6.7 (Final)
    
# su su- sudo su sudo
    * http://cn.linux.vbird.org/linux_basic/0410accountmanager_4.php
    
# cd
    * cd !$  把上个命令的参数作为cd参数使用
    * cd -   返回进入此目录之前所在的目录
    
# 查询出口ip
- curl ipinfo.io        
    