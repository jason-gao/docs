* mac 设置ssh认证互信，可以拉取、推送代码到github、gitlab

### 同一个Mac，配置多个SSH Key
* http://shinancao.cn/2016/12/18/Programming-Git-1/

*  ls -al ~/.ssh/

```text
drwx------   7 crystal  staff   224 Apr 27 22:28 .
drwxr-xr-x+ 34 crystal  staff  1088 Apr 27 22:28 ..
-rw-------   1 crystal  staff  3247 Apr 27 22:25 gitlabcompany
-rw-r--r--   1 crystal  staff   742 Apr 27 22:25 gitlabcompany.pub
-rw-------   1 crystal  staff  3243 Apr 27 22:14 id_rsa
-rw-r--r--   1 crystal  staff   743 Apr 27 22:14 id_rsa.pub
-rw-r--r--   1 crystal  staff  1608 Apr 27 22:23 known_hosts

```


*  ssh-keygen -t rsa -b 4096 -C "xx@xx.com"
*  Enter file in which to save the key (/Users/crystal/.ssh/id_rsa): ~/.ssh/gitlabcompany
*  上面输入文件是为了可以区分多个代码库，比如公司的gitlab和github
*  后面不需要密码就一路回车，你懂的
*  pbcopy < ~/.ssh/gitlabcompany.pub  公钥内容拷贝到剪贴板
*  gitlab->个人资料->ssh密钥 贴进去

#### error
 Committer: crystal <crystal@crystaldeMac.local>
您的姓名和邮件地址基于登录名和主机名进行了自动设置。请检查它们正确
与否。您可以对其进行设置以免再出现本提示信息。运行如下命令在编辑器
中编辑您的配置文件：

    git config --global --edit

设置完毕后，您可以用下面的命令来修正本次提交所使用的用户身份：

    git commit --amend --reset-author