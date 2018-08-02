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

