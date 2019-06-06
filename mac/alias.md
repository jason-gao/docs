vim ~/.bash_profile

source ~/.bash_profile

echo 'alias ll="ls -alh"' >> ~/.bash_profile
echo 'alias workspace="cd /Users/crystal/codes/"' >> ~/.bash_profile
echo 'alias workspace_shell="cd /Users/crystal/codes/shell"' >> ~/.bash_profile
echo 'alias workspace_php="cd /Users/crystal/codes/php"' >> ~/.bash_profile
echo 'alias workspace_go="cd /Users/crystal/codes/go/src/git.nodevops.cn/gcode"' >> ~/.bash_profile
echo 'alias workspace_doc="cd /Users/crystal/codes/php/github/docs"' >> ~/.bash_profile
echo 'alias workspace_doc_yd="cd /Users/crystal/codes/yundun"' >> ~/.bash_profile
echo 'alias workspace="cd /Users/crystal/codes/yundun"' >> ~/.bash_profile


## git alias
echo 'alias gphot="git rev-parse --abbrev-ref HEAD | xargs -t -I {} git push origin {}:tester-{}"' >> ~/.bash_profile
echo 'alias gpho="git rev-parse --abbrev-ref HEAD | xargs -t -I {} git push origin {}:{}"' >> ~/.bash_profile
echo 'alias gplo="git rev-parse --abbrev-ref HEAD | xargs -t -I {} git pull origin {}"' >> ~/.bash_profile
echo 'alias gcm="git checkout master"' >> ~/.bash_profile
echo 'alias gct="git checkout tester"' >> ~/.bash_profile
echo 'alias gcp="git checkout pre"' >> ~/.bash_profile
echo 'alias gc="git checkout "' >> ~/.bash_profile
echo 'alias gbgrep="git branch |grep "' >> ~/.bash_profile


## http proxy

[shellPath](export.md)
echo 'alias proxy="source $shellPath/setHttpProxy.sh"' >> ~/.bash_profile
echo 'alias unproxy="source $shellPath/unsetHttpProxy.sh"' >> ~/.bash_profile