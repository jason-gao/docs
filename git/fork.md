# 同步上游更改 - fork了别人的代码，怎么同步别人的更改？
    * https://help.github.com/articles/configuring-a-remote-for-a-fork/#platform-linux
    * https://help.github.com/articles/syncing-a-fork/
    
    * git remote add upstream xx.git 添加一个远程地址
    * git fetch upstream 拉取upstream的代码
    * git checkout master 切到本地master分支
    * git merge upstream/master 合并远程的upstream的代码到本地master 
        
    