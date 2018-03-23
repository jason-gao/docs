# windows git shell

1. 新建myalias.sh
> cd /etc/profile.d && touch myalias.sh
2.
> vim myalias.sh
```
alias makeapidocv4='apidoc -i E:/YunDun/yundun_api_V4/Controller -o E:/YunDun/apidoc/api_v4'
alias workspace='cd E:/YunDun/'
alias updateapidoctotest='git checkout master && git branch -d tester && git push origin --delete tester && git checkout -b tester && git push origin tester:tester'

```
