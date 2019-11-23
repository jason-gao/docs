
- https://git-scm.com/book/zh/v1/Git-%E5%9F%BA%E7%A1%80-%E6%8A%80%E5%B7%A7%E5%92%8C%E7%AA%8D%E9%97%A8

curl https://raw.githubusercontent.com/git/git/master/contrib/completion/git-completion.bash -o ~/.git-completion.bash 


vim ~/.bash_profile

if [ -f ~/.git-completion.bash ]; then 
. ~/.git-completion.bash 
fi 


source ~/.bash_profile
