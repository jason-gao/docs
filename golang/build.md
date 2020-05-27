go build -ldflags "-w -s -X main.Version=${VERSION} -X main.Build=${BUILD}"

-w 去掉DWARF调试信息，得到的程序就不能用gdb调试了。

-s 去掉符号表,panic时候的stack trace就没有任何文件名/行号信息了，这个等价于普通C/C++程序被strip的效果，

-X 设置包中的变量值


## 不同点
go build 不能生成包文件, go install 可以生成包文件
go build 生成可执行文件在当前目录下， go install 生成可执行文件在bin目录下（$GOPATH/bin）