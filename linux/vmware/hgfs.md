# error
- ln: creating symbolic link XX : Operation not supported(Linux下对windows文件创建软链接失败)

【环境】

VmWare的Linux + Windows 7 + vmhgfs文件共享



【问题】
在VMware下的Linux系统中编译通过vmhgfs从Windows中共享过来的文件夹代码时，遇到：
ln: creating symbolic link XXXXXX : Operation not supported



【原因】
出现这类问题，主要是由于在编译的时候，要用ln去建立一些软链接，而这些文件所在磁盘是NTFS格式，并通过VMWare的vmhgfs被Linux共享的，所以编译会报错。

概括来说，就是因为Windows磁盘是NTFS格式，Linux磁盘是ext4格式，ext4格式支持ln -s软连接，而NTFS不支持。



【解决办法】
在VMWare下的Linux中，建立Samba服务，创建新samba用户和共享文件。该共享文件夹对Windows和Linux都可见。

与vmhgfs方式不同的是，此时共享文件夹所在磁盘是ext4格式的，所以ln -s 可行，问题解决。
