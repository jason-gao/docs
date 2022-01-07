执行什么命令都报 no space

1. 系统用了inotify，需要调优
ps -ef |grep inoti
vim /etc/sysctl.conf
fs.inotify.max_user_watchers = 262144

超过这个数字，就会报no space left


2. 查看参考watch数
find /data/www -type d |wc -l



