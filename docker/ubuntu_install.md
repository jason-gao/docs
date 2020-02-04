* https://docs.docker.com/install/linux/docker-ce/ubuntu/
* https://docs.docker-cn.com/engine/installation/linux/docker-ce/ubuntu/
* http://www.itfanr.cc/2017/08/25/ubuntu-install-docker-ce-and-configure-mirror-accelerator/
* https://github.com/widuu/chinese_docker/blob/master/installation/ubuntu.md
* https://www.cnblogs.com/SzeCheng/p/6822905.html
* https://draveness.me/docker

* 查看操作系统版本
    * lsb_release -a
    ```
    No LSB modules are available.
    Distributor ID:	Ubuntu
    Description:	Ubuntu 16.04.3 LTS
    Release:	16.04
    Codename:	xenial
    ```

* 查看内核版本
    * uname -r
    ```
    4.13.0-38-generic
    
    ```
    
* sudo apt-get remove docker docker-engine docker.io
* sudo apt-get update
* sudo apt-get install \
       apt-transport-https \
       ca-certificates \
       curl \
       software-properties-common
* curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
* sudo apt-key fingerprint 0EBFCD88
* sudo add-apt-repository \
      "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
      $(lsb_release -cs) \
      stable"       
* sudo apt-get update
* sudo apt-get install docker-ce      
* sudo docker run hello-world
# 以非 root 用户身份管理 Docker
* sudo usermod -aG docker jasong
* sudo reboot
* docker info
    * WARNING: No swap limit support
    * vim /etc/default/grub
    * GRUB_CMDLINE_LINUX="cgroup_enable=memory swapaccount=1"
    * sudo update-grub
    * sudo reboot
* gpasswd -a ${USER} docker 把当前用户加到docker用户组 不用每次启动Docker都得加sudo了           
           
* ali源
    # step 1: 安装必要的一些系统工具
    sudo apt-get update
    sudo apt-get -y install apt-transport-https ca-certificates curl software-properties-common
    # step 2: 安装GPG证书
    curl -fsSL http://mirrors.aliyun.com/docker-ce/linux/ubuntu/gpg | sudo apt-key add -
    # Step 3: 写入软件源信息
    sudo add-apt-repository "deb [arch=amd64] http://mirrors.aliyun.com/docker-ce/linux/ubuntu $(lsb_release -cs) stable"
    # Step 4: 更新并安装 Docker-CE
    sudo apt-get -y update
    sudo apt-get -y install docker-ce
    # 安装指定版本的Docker-CE:
    # Step 1: 查找Docker-CE的版本:
    # apt-cache madison docker-ce
    #   docker-ce | 17.03.1~ce-0~ubuntu-xenial | http://mirrors.aliyun.com/docker-ce/linux/ubuntu xenial/stable amd64 Packages
    #   docker-ce | 17.03.0~ce-0~ubuntu-xenial | http://mirrors.aliyun.com/docker-ce/linux/ubuntu xenial/stable amd64 Packages
    # Step 2: 安装指定版本的Docker-CE: (VERSION 例如上面的 17.03.1~ce-0~ubuntu-xenial)
    # sudo apt-get -y install docker-ce=[VERSION]
               
* 说明
  * Docker container（容器）：
    * 前面所说的应用就是在它内部跑的。它有自己完整的文件系统和操作系统，反正应用需要的一切本地资源都有。
  * Docker image（镜像）：
    * 应用代码和各种库和文件会被打包成一个文件，这就是 image 了。它还可以设置环境变量、运行的入口等元信息。它需要被加载到容器里才能运行。
  * Docker daemon：监听客户端请求，提供容器和镜像的管理功能。
  * Docker client：与 daemon 通信，完成管理功能。
  * Docker Engine：由 Docker daemon 及其 API 组成的一个服务端应用。
  * Docker Machine：可以在虚拟机上安装 Docker Engine 的工具。
  * Docker registry：存放 image 的地方。最大的一个是 Docker Hub，可以很容易地知道别人的镜像是怎么做的。                                
                                  