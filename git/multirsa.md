### 多对公私钥在不同git平台的应用

cat ~/.ssh/config

Host github.com
   HostName github.com
   User xx@qq.com
   PreferredAuthentications publickey
   IdentityFile ~/.ssh/id_rsa
Host githubcompany
   HostName github.com
   User xx@xxx.com
   PreferredAuthentications publickey
   IdentityFile ~/.ssh/githubcompany
Host git.nodevops.cn
  HostName git.nodevops.cn
  User xx@xx.com
  PreferredAuthentications publickey
  IdentityFile ~/.ssh/gitlabcompany
Host *
    ServerAliveInterval 30



## set remote url  use githubcompany ssh config
## cat .git/config/
git remote set-url origin git@githubcompany:xx-php/repo-name.git


