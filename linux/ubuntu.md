# ubuntu 16.04
    * 镜像 https://mirrors.aliyun.com/ubuntu-releases/16.04.4/
    
* 连接网络
    * bridged
    * 设置静态ip
        * 界面：settings->network->wired->options->ipv4 settings->
            Method:Manual
            Address:192.168.5.189
            NetMask:24
            GateWay:192.168.5.1
            DnsServer:223.5.5.5
        * 配置文件  https://segmentfault.com/a/1190000004651192
            * vim  /etc/network/interfaces
            iface eth0 inet static  //static为静态的
            address 192.168.5.189   //ip地址
            netmask 255.255.255.0   //子网掩码
            gateway 192.168.5.1     //网关
            broadcast 192.168.5.255 //广播
            * vim /etc/resolv.conf
              nameserver 202.96.134.133
            

* 安装pecl
    * sudo apt-get install php-pear