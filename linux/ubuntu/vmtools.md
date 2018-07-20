* 共享windows和虚拟机目录
sudo apt-get install open-vm-tools
sudo mkdir /mnt/hgfs
sudo /usr/bin/vmhgfs-fuse .host:/ /mnt/hgfs -o subtype=vmhgfs-fuse,allow_other

* Error -107 cannot open connection!
* vm ware 虚拟机 vm settings->options->Shared Folders->Always enabled->Folders->name&Host Path映射