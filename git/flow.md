-  https://www.liaoxuefeng.com/wiki/896043488029600/897013573512192 

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
b)	git reset --soft 154b0b 退到add之后，commit之前，保留修改
c)	git reset --hard 154b0b 退到add之前，不保留修改
d)  git reset --hard HEAD^ 回到上一个版本
e)  git reset --hard HEAD^^ 回到上上个版本
f)  用git log可以查看提交历史，以便确定要回退到哪个版本
g)  要重返未来，用git reflog查看命令历史，以便确定要回到未来的哪个版本
h)  git reset HEAD tests/coverage/* 撤销add
i)  撤销commit的文件，b->h 

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

# 显示当前的配置
git config --list
git config --global --edit

1. 设置别名
git config --global alias.cm commit
git config --global alias.st status
git config --global alias.co checkout

2. 删除本地分支 
   git branch -d/-D xxx
3. 基于本地分支拉取新分支
	git checkout master
	git checkout -b xxx 基于本地master新拉取分支
	
	git checkout -b testx 17ecba942dc25d776f4f31ae5432e15f7ffdd06a 指定commit拉取分支
4. 删除远程分支
   * git push origin --delete xxx
   * git push origin :xxx
   
5. 设置用户名和邮箱
   * git config --global  user.name xxx
   * git config --global  user.email xx@xx.com

##生成公钥、私钥
1. 安装好git
2. 进到git bash
3. ssh-keygen -C xx@xx.com
4. 将公钥添加到gitlab，方便和gitlab通信拉取代码



# 版本回退
a)已经push到线上
1. git reset --hard xx版本 （本地）
2. git push origin master:master -f （强推到远程仓库）
3. git reset --hard xx版本 （线上需要将本地的更新回退到xx版本，关键）
4. git pull (拉取最新)

# 忽略已经推送过的文件不起作用
原因：已经被track
解决：
  * https://mirrors.edge.kernel.org/pub/software/scm/git/docs/git-rm.html
1. git rm -r --cached WebRoot/Home/index.php
2. git add .
3. git cm -m "xx"

# 修改文件名的大小写没用
原因：忽略了大小写
解决：
git config core.ignorecase false


# 拉取指定的分支的代码
* git clone -b 分支名 仓库地址 代码目录
    * git clone -b xx https://github.com/xx.git /data/www/xx

# 修改上次commit的信息
* git commit --amend

# 获取上次的commit id
* git rev-parse HEAD
* git rev-parse --short HEAD 短的commit id

# tag
1) 删除本地标签 '12345'
    git tag -d 12345
2) 删除远程标签 '12345' (eg, GitHub version too)
    git push origin :refs/tags/12345
3) 删除远程标签替代方法
    git push --delete origin tagName
4) 打标签
    git tag -a v1.1.4 -m "tagging version 1.1.4"
5) 列出标签
    git tag

# tools
[git自动补全](../mac/git自动补全.md) 
[git alias](../linux/gitalias.md)  
[git alias mac](../mac/alias.md)  

# diff
git diff --stat master..tester

# 查看文件的历史提交信息
git log 文件名

# 查看某个版本某个文件修改情况
git show 版本号（通过上面的命令查得）  文件名

# 把某次或者某2个commit区间改动打包
- git diff-tree -r --no-commit-id --name-only b3d5a554 | xargs tar -rf mytarfile.tar
- git diff-tree -r --no-commit-id --name-only b3d5a554  b3d5a555 | xargs tar -rf mytarfile.tar


	
