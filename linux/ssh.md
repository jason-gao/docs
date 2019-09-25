* 取消ssh私钥密码
    * http://woodenrobot.me/2018/01/30/%E5%8F%96%E6%B6%88-SSH-%E7%A7%81%E9%92%A5%E5%AF%86%E7%A0%81/
    ```bash
      ssh-keygen -f /c/Users/NP-007/.ssh/id_rsa -p

    ```
    Enter old passphrase:
    输入旧密码，旧密码输错会提示：
    Failed to load key /c/Users/NP-007/.ssh/id_rsa: incorrect passphrase supplied to decrypt private key
    旧密码输正确：
    输入新密码
    Enter new passphrase (empty for no passphrase):
    Enter same passphrase again:
    Your identification has been saved with the new passphrase.
    新密码输入空即可

* ssh keys
    * https://wiki.archlinux.org/index.php/SSH_keys_(%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87)#.E8.83.8C.E6.99.AF
    
* 免密登录, 不实用密码登陆，使用公钥登陆
    * https://www.ssh.com/ssh/copy-id
    
    ```
    生成公私钥对
    ssh-keygen
    
    设置互信
    ssh-copy-id -i ~/.ssh/id_rsa.pub root@127.0.0.1
    输入要连接的主机的密码
    
    test
    ssh -i ~/.ssh/id_rsa.pub root@127.0.0.1
   
    类似于：
    
    公钥上传到server端
    cat id_rsa.pub >> ～/.ssh/authorized_keys
    chmod 600 authorized_keys
    关闭SELinux服务：vi /etc/selinux/config, 把SELINUX=disabled,重启服务器
    
    关闭密码验证：
    修改服务器端ssh配置文件: cd /etc/ssh
    vi sshd_config：
    RSAAuthentication yes : 开启rsa验证
    PubkeyAuthentication yes: 是否使用公钥
    AuthorizedKeysFile .ssh/authorized_keys: 公钥保存位置
    PasswordAuthentication no: 禁止使用密码登录
   
    ```
    
    
## -i 权限问题
Permissions 0644 for '/Users/crystal/codes/shell/xx.pem' are too open.
It is required that your private key files are NOT accessible by others.
This private key will be ignored.
Load key "/Users/crystal/codes/shell/xx.pem": bad permissions    


## 清除旧的公钥信息
ssh会把你每个你访问过计算机的公钥(public key)都记录在~/.ssh/known_hosts。
当下次访问相同计算机时，OpenSSH会核对公钥。如果公钥不同，OpenSSH会发出警告，如果我们重新安装系统，其公钥信息还在，需要清除
cat ~/.ssh/known_hosts
ssh-keygen -R 192.168.0.100

