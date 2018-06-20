# 修改commit过的信息
+   git commit --amend
    *   http://xiewenbo.iteye.com/blog/1285693

> 
    当你不小心，写错了提交的注释/信息，该如何处理呢。理论上，是不应该修改历史的信息的，提交的注释也是。 
      不过在git中，其commit提供了一个--amend参数，可以修改最后一次提交的信息.但是如果你已经push过了，那么其历史最后一次，永远也不能修改了。 
      我使用git commit --amend已经push过的，截图如下，我那个"fixes #3"永远的在版本历史中了。 
    
    git commit --amend 
    
    的用法，，， 
    
    # git commit --amend 
    
    然后在出来的编辑界面，直接编辑 注释的信息。。 

> 
       git使用amend选项提供了最后一次commit的反悔。但是对于历史提交呢，就必须使用rebase了。 

       git rebase -i HEAD~3 

       表示要修改当前版本的倒数第三次状态。 

        这个命令出来之后，会出来三行东东： 

        pick:******* 

        pick:******* 

        pick:******* 

        如果你要修改哪个，就把那行的pick改成edit，然后退出。 



        这时通过git log你可以发现，git的最后一次提交已经变成你选的那个了，这时再使用： 

        git commit -amend 

        来对commit进行修改。 

        修改完了之后，要回来对不对？ 

        使用git rebase --continue 