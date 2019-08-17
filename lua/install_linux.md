## centos

```bash
cd /data/soft/
curl -R -O http://www.lua.org/ftp/lua-5.3.5.tar.gz
tar zxf lua-5.3.5.tar.gz
cd lua-5.3.5
make linux test

```

* src下会有编译好的lua和luac
* 如果系统已经安装过lua，需要替换下
    * which lua
    * /usr/local/bin/lua
    * ln -s --backup /data/soft/lua-5.3.5/src/lua /usr/local/bin/lua
    * ln -s --backup /data/soft/lua-5.3.5/src/luac /usr/local/bin/luac
    * --backup是软链如果存在，备份为lua~何luac~
    * /data/soft/lua-5.3.5/src/lua 是lua二进制实际位置，/usr/local/bin/lua是软链名称
    