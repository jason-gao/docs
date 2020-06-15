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
 
 
## vim插件
- http://coderunthings.com/2015/12/09/frontendvim/ 
```text
前端常用插件
以下是我平时前端开发中用到的插件：
NerdTree。必装插件，实现树状文件查找。
YouCompleteMe。必备插件，代码自动补齐。
emmet-vim。必备插件，zen-coding。
vim-multiple-cursors。同时多行编辑。
indentLine。显示代码缩进。
syntastic。语法检查。
javascript-libraries-syntax.vim。JS代码高亮插件。
vim-javascript-syntax。代码折叠。
tern_for_vim。快速跳转到变量/函数定义的地方。
JavaScript-Indent。代码缩进

```

## 高亮
touch ~/.vimrc
vim ~/.vimrc
syntax on



