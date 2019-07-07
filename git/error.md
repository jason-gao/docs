# 异常关机文件损坏
error: bad signature
fatal: index file corrupt

* https://www.clarencep.com/2017/10/23/a-note-to-git-error-bad-signature-index-file-corrupt/

* rm -rf ./git/index
* git reset

# config
fatal: bad config file line 1 in .git/config


# git pull error
- fatal: refusing to merge unrelated histories
- git pull origin master --allow-unrelated-histories 
- https://git-scm.com/docs/git-pull#Documentation/git-pull.txt---allow-unrelated-histories
