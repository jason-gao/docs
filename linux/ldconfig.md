* https://blog.csdn.net/chenzixun0/article/details/56278632

ldconfig是一个动态链接库管理命令，其目的为了让动态链接库为系统所共享。

ldconfig的主要用途：

默认搜寻/lilb和/usr/lib，以及配置文件/etc/ld.so.conf内所列的目录下的库文件。

搜索出可共享的动态链接库，库文件的格式为：lib***.so.**，进而创建出动态装入程序(ld.so)所需的连接和缓存文件。

缓存文件默认为/etc/ld.so.cache，该文件保存已排好序的动态链接库名字列表。

ldconfig通常在系统启动时运行，而当用户安装了一个新的动态链接库时，就需要手工运行这个命令。

 

ldconfig命令参数说明：

1、 -v或--verbose:用此选项时,ldconfig将显示正在扫描的目录及搜索到的动态链接库,还有它所创建的连接的名字.

2、-n :用此选项时,ldconfig仅扫描命令行指定的目录,不扫描默认目录(/lib,/usr/lib),也不扫描配置文件/etc/ld.so.conf所列的目录.

3、-N :此选项指示ldconfig不重建缓存文件(/etc/ld.so.cache).若未用-X选项,ldconfig照常更新文件的连接.

4、-X : 此选项指示ldconfig不更新文件的连接.若未用-N选项,则缓存文件正常更新.

5、-f CONF : 此选项指定动态链接库的配置文件为CONF,系统默认为/etc/ld.so.conf.

6、-C CACHE :此选项指定生成的缓存文件为CACHE,系统默认的是/etc/ld.so.cache,此文件存放已排好序的可共享的动态链接库的列表.

7、-r ROOT :此选项改变应用程序的根目录为ROOT(是调用chroot函数实现的).选择此项时,系统默认的配置文件/etc/ld.so.conf,实际对应的为ROOT/etc/ld.so.conf.如用-r/usr/zzz时,打开配置文件/etc/ld.so.conf时,实际打开的是/usr/zzz/etc/ld.so.conf文件.用此选项,可以大大增加动态链接库管理的灵活性.

8、-l :通常情况下,ldconfig搜索动态链接库时将自动建立动态链接库的连接.选择此项时,将进入专家模式,需要手工设置连接.一般用户不用此项.

9、-p或--print-cache :此选项指示ldconfig打印出当前缓存文件所保存的所有共享库的名字.

10、-c FORMAT 或--format=FORMAT :此选项用于指定缓存文件所使用的格式,共有三种:ld(老格式),new(新格式)和compat(兼容格式,此为默认格式).

11、-V : 此选项打印出ldconfig的版本信息,而后退出.

12、- 或 --help 或--usage : 这三个选项作用相同,都是让ldconfig打印出其帮助信息,而后退出.、

 

ldconfig需要注意的地方：

1、往/lib和/usr/lib里面加东西，是不用修改/etc/ld.so.conf文件的，但是添加完后需要调用下ldconfig，不然添加的library会找不到。

2、如果添加的library不在/lib和/usr/lib里面的话，就一定要修改/etc/ld.so.conf文件，往该文件追加library所在的路径，然后也需要重新调用下ldconfig命令。比如在安装MySQL的时候，其库文件/usr/local/mysql/lib，就需要追加到/etc/ld.so.conf文件中。命令如下：

# echo "/usr/local/mysql/lib" >> /etc/ld.so.conf

# ldconfig -v | grep mysql

3、如果添加的library不在/lib或/usr/lib下，但是却没有权限操作写/etc/ld.so.conf文件的话，这时就需要往export里写一个全局变量LD_LIBRARY_PATH，就可以了。