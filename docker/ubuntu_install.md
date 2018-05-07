* https://docs.docker.com/install/linux/docker-ce/ubuntu/
* https://docs.docker-cn.com/engine/installation/linux/docker-ce/ubuntu/
* http://www.itfanr.cc/2017/08/25/ubuntu-install-docker-ce-and-configure-mirror-accelerator/
* https://github.com/widuu/chinese_docker/blob/master/installation/ubuntu.md

* 查看系统版本
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