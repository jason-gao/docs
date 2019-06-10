# install
## 下载
- https://dl.google.com/go/go1.12.5.linux-amd64.tar.gz

## 解压
    
## 设置环境变量

- vim /etc/profile.d/go.sh
```bash
# go 

export GOPATH=/mnt/hgfs/YunDun/Go
export GOROOT=/data/soft/go1.12.5/go
export GOBIN=$GOROOT/bin
export PATH=$GOBIN:$PATH


```

## go version
- go version go1.12.5 linux/amd64
