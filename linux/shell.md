* 前面条件不成立的时候才执行后面
    * ||
    * cron里没有再执行echo
        * grep -q 'ntpdate ntp1.aliyun.com' /var/spool/cron/root || echo "0 * * * * /usr/sbin/ntpdate ntp1.aliyun.com &>/dev/null && /sbin/hwclock -w" >>/var/spool/cron/root
    
* 命令执行成功与否
    * $? 为0 表示执行成功，其他为不成功
    * grep不到 $? 为1
    * sed 不到 $? 为0
    * 脚本中 exit 1 $?为1