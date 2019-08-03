# windows git shell

1. cd /etc/profile.d && touch myalias.sh
2. vim /etc/profile.d/myalias.sh
```
alias workspace='cd E:/YunDun/'
alias gg='git rev-parse --abbrev-ref HEAD | xargs -t -i git push origin {}:{}'
alias ggt='git rev-parse --abbrev-ref HEAD | xargs -t -i git push origin {}:tester-{}'
alias gpo='git rev-parse --abbrev-ref HEAD | xargs -t -i git pull origin {}'
alias makeapidocv4='apidoc -i E:/YunDun/yundun_api_V4/Controller -o E:/YunDun/apidoc/api_v4'
alias makeapidocsso='apidoc -i E:/YunDun/sso-backend-server/Controller -o E:/YunDun/apidoc/api_v4/sso_api'
alias makeapidocadminv5api='apidoc -i E:/YunDun/admin-v5-api/Controller -o E:/YunDun/apidoc/api_v4/adminV5Api'
alias pullmaster='git checkout master && git pull origin master'
alias cmmaster='git checkout master && git add . && git cm -m "update apidoc" && git push origin master:master'
alias ctime='echo `date "+%Y-%m-%d %H:%M:%S"`'
alias updateapidoctotest='git checkout master && git branch -d tester && git push origin --delete tester && git checkout -b tester && git push origin tester:tester'
alias update_apidoctotest_onestep='makeapidocv4 && makeapidocsso && makeapidocadminv5api && pullmaster && cmmaster && updateapidoctotest && ctime'

alias gphot='git rev-parse --abbrev-ref HEAD | xargs -t -i git push origin {}:tester-{}'
alias gpho='git rev-parse --abbrev-ref HEAD | xargs -t -i git push origin {}:{}'
alias gplo='git rev-parse --abbrev-ref HEAD | xargs -t -i git pull origin {}'
alias gcm='git checkout master'
alias gct='git checkout tester'
alias gcp='git checkout pre'
alias gc='git checkout '
alias gbgrep='git branch |grep '
alias gm='git merge '

```
3. source /etc/profile.d/myalias.sh


## linux-centOs
git config --global alias.cm commit
git config --global alias.st status
git config --global alias.co checkout

cd /etc/profile.d && touch myalias.sh && vim /etc/profile.d/myalias.sh

```bash

alias gphot='git rev-parse --abbrev-ref HEAD | xargs -t -i git push origin {}:tester-{}'
alias gpho='git rev-parse --abbrev-ref HEAD | xargs -t -i git push origin {}:{}'
alias gplo='git rev-parse --abbrev-ref HEAD | xargs -t -i git pull origin {}'
alias gcm='git checkout master'
alias gct='git checkout tester'
alias gcp='git checkout pre'
alias gc='git checkout '
alias gbgrep='git branch |grep '
alias gm='git merge '

```