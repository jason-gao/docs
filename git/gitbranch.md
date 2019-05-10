# 找到开发分支基于哪个分支拉取的
-- git fetch origin orginbranchxx:localbranchxx
-- git checkout -b xx origin/originbranchxx 基于远程分支切换
-- git checkout -b xx  

-- git reflog --date=local  |grep unifyOpLog
```text

1467b2d HEAD@{Tue May 7 18:41:59 2019}: merge origin/unifyOpLog: Fast-forward
155bc7d HEAD@{Tue May 7 18:41:50 2019}: checkout: moving from unifyOpLog to tester
155bc7d HEAD@{Tue May 7 11:31:52 2019}: checkout: moving from tester to unifyOpLog

```

## 分支graph
--  git log --graph --all --decorate=short
