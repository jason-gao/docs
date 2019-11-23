
curl https://raw.githubusercontent.com/git/git/master/contrib/completion/git-completion.bash -o ~/.git-completion.bash 


vim ~/.bash_profile

if [ -f ~/.git-completion.bash ]; then 
. ~/.git-completion.bash 
fi 


source ~/.bash_profile
