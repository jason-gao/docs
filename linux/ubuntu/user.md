# 新建用户后没有家目录
    * cp -a /etc/skel   /home/username
    * chown -R username:groupname /home/username