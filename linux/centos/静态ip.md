### vim /etc/sysconfig/network-scripts/ifcfg-eth0
```text
DEVICE=eth0
BOOTPROTO=static
ONBOOT=yes
IPADDR=192.168.5.188
NETMASK=255.255.255.0
GATEWAY=192.168.5.1
DNS1=114.114.114.114
DNS2=223.5.5.5
DNS3=8.8.8.8

```

### service network restart  重启网卡

### 此时/etc/resolver.conf 里的已经自动变更

nameserver 114.114.114.114
nameserver 223.5.5.5
nameserver 8.8.8.8