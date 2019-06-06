- https://jaminzhang.github.io/linux/tr-command-usage-summary/

```text
[root@Jamin-SFO1 ~]# cat test.txt
192.168.56.1,

192.168.56.2,

192.168.56.3,

192.168.56.4,

192.168.56.5,
[root@Jamin-SFO1 ~]# tr -s "\r\n" "," < test.txt
192.168.56.1,192.168.56.2,192.168.56.3,192.168.56.4,192.168.56.5,

```