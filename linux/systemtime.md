#同步时间
0 * * * * /usr/sbin/ntpdate time.nist.gov &>/dev/null && hwclock -w
0 * * * * /usr/bin/rdate -s time-b.nist.gov && hwclock -w