- https://zhuanlan.zhihu.com/p/59191567
- https://www.cnblogs.com/akidongzi/p/11772701.html


# go mod init xx
生成go.mod
module xx

### import
import时候 xx/xxx，从module的名字地方找起
不依赖$GOPATH

### build
go build -mod=vendor 需要有vendor目录
go mod vendor

### pkg
go mod tidy -> pkg mod cache version



