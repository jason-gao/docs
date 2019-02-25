* 前面条件不成立的时候才执行后面
    * ||
    * cron里没有再执行echo
        * grep -q 'ntpdate ntp1.aliyun.com' /var/spool/cron/root || echo "0 * * * * /usr/sbin/ntpdate ntp1.aliyun.com &>/dev/null && /sbin/hwclock -w" >>/var/spool/cron/root
    
* 命令执行成功与否
    * $? 为0 表示执行成功，其他为不成功
    * grep不到 $? 为1
    * sed 不到 $? 为0
    * 脚本中 exit 1 $?为1
    
* kill进程
    * ps -ef |grep YunDunV5NgxConf/create |grep -v grep|awk '{print $2}'|xargs kill -9

* 屏蔽 stdout 和 stderr
    * command > /dev/null 2>&1
    * 注意：0 是标准输入（STDIN），1 是标准输出（STDOUT），2 是标准错误输出（STDERR）
* 日志写入文件
    * command >> file 追加方式
    * command > file  覆盖方式