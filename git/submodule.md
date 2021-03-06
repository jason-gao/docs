* https://git-scm.com/book/zh/v2/Git-%E5%B7%A5%E5%85%B7-%E5%AD%90%E6%A8%A1%E5%9D%97
* https://juejin.im/post/5aa11f486fb9a028e0140e34

子模块
----
有种情况我们经常会遇到：某个工作中的项目需要包含并使用另一个项目。 也许是第三方库，或者你独立开发的，用于多个父项目的库。 
现在问题来了：你想要把它们当做两个独立的项目，同时又想在一个项目中使用另一个。

我们举一个例子。 假设你正在开发一个网站然后创建了 Atom 订阅。 
你决定使用一个库，而不是写自己的 Atom 生成代码。 
你可能不得不通过 CPAN 安装或 Ruby gem 来包含共享库中的代码，或者将源代码直接拷贝到自己的项目中。 
如果将这个库包含进来，那么无论用何种方式都很难定制它，部署则更加困难，因为你必须确保每一个客户端都包含该库。
如果将代码复制到自己的项目中，那么你做的任何自定义修改都会使合并上游的改动变得困难。

Git 通过子模块来解决这个问题。 子模块允许你将一个 Git 仓库作为另一个 Git 仓库的子目录。 
它能让你将另一个仓库克隆到自己的项目中，同时还保持提交的独立。

*  添加子模块
    git submodule add https://github.com/geekcomputers/Shell
    git status
    cat .gitmodules
    git diff --cached --submodule

* 克隆
    * 默认克隆下来的是空
        * resolve:
            * git submodule init
            * git submodule update
            或者：
            git clone --recursive xxx
    
* 拉取上游修改
   * git fetch
   * git merge origin/master     