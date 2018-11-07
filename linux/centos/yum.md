# 添加yum源
    * https://blog.itnmg.net/2012/09/17/centos-yum-source/
    
# 安装epel源
+   yum install epel-release

# 查找yum安装的软件位置
* rpm -qa|grep tree
    *  tree-1.5.3-3.el6.x86_64
* rpm -ql tree-1.5.3-3.el6.x86_64
    * /usr/bin/tree
    * /usr/share/doc/tree-1.5.3

