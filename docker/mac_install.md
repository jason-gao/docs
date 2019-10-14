os:
mojave 10.14.4
4 core 16g

- 注册docker hub
- 下载 https://download.docker.com/mac/stable/Docker.dmg

```text

- docker info


Client:
 Debug Mode: false

Server:
 Containers: 0
  Running: 0
  Paused: 0
  Stopped: 0
 Images: 1
 Server Version: 19.03.2
 Storage Driver: overlay2
  Backing Filesystem: extfs
  Supports d_type: true
  Native Overlay Diff: true
 Logging Driver: json-file
 Cgroup Driver: cgroupfs
 Plugins:
  Volume: local
  Network: bridge host ipvlan macvlan null overlay
  Log: awslogs fluentd gcplogs gelf journald json-file local logentries splunk syslog
 Swarm: inactive
 Runtimes: runc
 Default Runtime: runc
 Init Binary: docker-init
 containerd version: 894b81a4b802e4eb2a91d1ce216b8817763c29fb
 runc version: 425e105d5a03fabd737a126ad93d62a9eeede87f
 init version: fec3683
 Security Options:
  seccomp
   Profile: default
 Kernel Version: 4.9.184-linuxkit
 Operating System: Docker Desktop
 OSType: linux
 Architecture: x86_64
 CPUs: 4
 Total Memory: 1.952GiB
 Name: docker-desktop
 ID: 5TU3:JCEE:RWWQ:FDA3:K7SD:D5NQ:ZO4V:LYWC:D6W2:MXCV:MRMM:YXYQ
 Docker Root Dir: /var/lib/docker
 Debug Mode: true
  File Descriptors: 30
  Goroutines: 46
  System Time: 2019-10-02T05:54:50.365713118Z
  EventsListeners: 2
 HTTP Proxy: gateway.docker.internal:3128
 HTTPS Proxy: gateway.docker.internal:3129
 Registry: https://index.docker.io/v1/
 Labels:
 Experimental: false
 Insecure Registries:
  127.0.0.0/8
 Live Restore Enabled: false
 Product License: Community Engine
 
```
- 镜像加速
Docker Desktop->preferences->daemon->advanced
```json
{
  "experimental" : false,
  "debug" : true,
  "registry-mirrors" : [
    "https://dockerhub.azk8s.cn",
    "https://reg-mirror.qiniu.com"
  ]
}


```
- docker info查看
 Registry Mirrors:
   https://dockerhub.azk8s.cn/
   https://reg-mirror.qiniu.com/
   
   