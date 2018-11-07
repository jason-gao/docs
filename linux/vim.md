* https://github.com/ma6174/vim-deprecated
* https://raw.github.com/ma6174/vim/master/setup.sh
![effect](https://github.com/ma6174/vim-deprecated/blob/master/screenshot.png)

* install

```
wget -qO- https://raw.github.com/ma6174/vim/master/setup.sh | sh -x

```

* 卸载
* rm -rf /root/.vimrc


## vim使用
- [缩进](#缩进)

 <a name="缩进">缩进</a>
 * 插入状态下缩进: Ctrl-T 右缩 ; Ctrl-D 左缩
 * 命令状态下左右缩进: >> 右缩进 ; << 左缩进 ; n<< 或 n>> ; 缩进多行，如4>>

* n 继续查找
* N 反向查找

* 行号
    * 设置行号 :set nu
    * 取消行号 :set nonu

# vim下函数跳转
    * sudo apt-get install exuberant-ctags ->ubuntu
    * yum install ctags -> centos
    * 进入源码目录ctags -R . 生成tags文件
    * CTRL + ]  跳转
    * CTRL + T 跳回来
 
 
 