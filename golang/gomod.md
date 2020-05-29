- https://zhuanlan.zhihu.com/p/59191567
- https://www.cnblogs.com/akidongzi/p/11772701.html
- https://www.cnblogs.com/chnmig/p/12868474.html



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


### 代理
go env -w GOPROXY="https://mirrors.aliyun.com/goproxy/,direct"
go env -w GOPROXY="https://git.nodevops.cn/"

## 私有仓库
//go env -w GOPRIVATE=*.gitlab.com,*.gitee.com
#### git.nodevops.cn不走代理
go env -w GOPRIVATE=git.nodevops.cn
GONOPROXY="git.nodevops.cn"
GONOSUMDB="git.nodevops.cn"
同时会被设置
//go env -w GOSUMDB="sum.golang.google.cn"

### ssh替换https
- https://git-scm.com/docs/git-config/
//git config --global url.[new_url].insteadof [old_url]
//git config --global url."git@git.nodevops.cn".insteadof "https://git.nodevops.cn/"
git config  url."git@git.nodevops.cn".insteadof "https://git.nodevops.cn/"
//git config --unset  url."git@git.nodevops.cn".insteadof "https://git.nodevops.cn/"
将git 协议换为 https
git config --global url."https://".insteadOf "git://"
[url "git@git.nodevops.cn"]
        insteadof = https://git.nodevops.cn

//cat .git/config 
//cat ~/.gitconfig

down 下来内网项目，replace到这个目录
直接goproxy配多个代理地址
内网的仓库放前面


### unable to get local issuer certificate
git config --global http.sslverify false

##  go get http
go get --insecure xxxx


### token
git config --global http.extraheader "PRIVATE-TOKEN: YOUR_PRIVATE_TOKEN"
