1 master不要直接操作,需要多建分支（严格按照功能拉取分支，减少因为某个功能上不了导致其他功能也无法更新的问题）
2. 冲突解决：
合并产生冲突时：
1. Merge 方式冲突
a)	撤销当前合并git merge --abort
b)	修改文件，解决冲突，重新提交：
i.	Git add.
ii.	Git commit -m “xxx”
iii.	Git push

2. Rebase 方式冲突：
a)	撤销当前合并git rebase --abort
b)	修改文件，解决冲突，继续rebase：
i.	Git add .
ii.	Git rebase --continue
iii.	Git push

3. 撤销
1. 撤销add的文件 git reset HEAD <file>
2. 撤销commit
a)	git reset 154b0b 默认退到add之前，保留修改
b)	git reset  --soft 154b0b 退到add之后，commit之前，保留修改
c)	git reset --hard 154b0b 退到add之前，不保留修改
3. 撤销文件更改 git checkout <file>
临时性分支
临时性分支主要有三种：
　　* 功能（feature）分支
　　* 预发布（release）分支
　　* 修补bug（fixbug）分支

命名方式：
功能分支的名字，可以采用feature-*的形式命名
Bug分支的名字，可以采用bug-*的形式命名


##git常用设置
1. 设置别名
git config --global alias.cm commit
git config --global alias.st status
git config --global alias.co checkout

2. 删除本地分支 
   git branch -d xxx
3. 基于本地分支拉取新分支
	git checkout master
	git checkout -b xxx 基于本地master新拉取分支
4. 删除远程分支
   git push origin --delete xxx

##生成公钥、私钥
1. 安装好git
2. 进到git bash
3. ssh-keygen -C xx@xx.com
4. 将公钥添加到gitlab，方便和gitlab通信拉取代码



# 版本回退
a)已经push到线上
1.git reset --hard xx版本 （本地）
2. git push origin master:master -f （强推到远程仓库）
3. git reset --hard xx版本 （线上需要将本地的更新回退到xx版本，关键）
4. git pull (拉取最新)

# 忽略已经推送过的文件不起作用
原因：已经被track
解决：
1. git rm -r --cached WebRoot/Home/index.php
2. git add .
3. git cm -m "xx"

# 修改文件名的大小写没用
原因：忽略了大小写
解决：
git config core.ignorecase false