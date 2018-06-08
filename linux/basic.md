* 回到上次目录 cd -
* 查看cpu信息 more /proc/cpuinfo
# 查找nginx主进程
    * ps -ef | grep "nginx: master process" | grep -v "grep" | awk -F ' ' '{print $2}'
# 查看gcc编译器版本
    * gcc -v
# 查看具体进程名：经常用于监控：ps -ef |awk '{print $8}' |grep -e '^ypf:swoole-worker-0$'    