ps -ef |grep php-fpm

strace -cp 17535


% time     seconds  usecs/call     calls    errors syscall
------ ----------- ----------- --------- --------- ----------------
 71.10    0.002000          36        56           accept
  8.75    0.000246           2       132           poll
  7.89    0.000222           4        56           shutdown
  3.41    0.000096           2        56           write
  1.46    0.000041           0       182           mmap
  1.39    0.000039           0       427         1 lstat
  1.28    0.000036           0       540           fstat
  1.14    0.000032           0       802           read
  0.92    0.000026           0       185           open
  0.89    0.000025           0       104           access
  0.71    0.000020           0       514           lseek
  0.60    0.000017           0       112           chdir
  0.46    0.000013           0       251           close
  0.00    0.000000           0         5         1 stat
  0.00    0.000000           0       182           munmap
  0.00    0.000000           0        59           rt_sigaction
  0.00    0.000000           0        57           rt_sigprocmask
  0.00    0.000000           0         2           alarm
  0.00    0.000000           0       224           setitimer
  0.00    0.000000           0        11         1 socket
  0.00    0.000000           0         5         5 connect
  0.00    0.000000           0        24           sendto
  0.00    0.000000           0       147           recvfrom
  0.00    0.000000           0        10           recvmsg
  0.00    0.000000           0         5           bind
  0.00    0.000000           0         5           getsockname
  0.00    0.000000           0         4           setsockopt
  0.00    0.000000           0         5           getsockopt
  0.00    0.000000           0        14           fcntl
  0.00    0.000000           0         2           getdents
  0.00    0.000000           0        57           getcwd
  0.00    0.000000           0       112           times
------ ----------- ----------- --------- --------- ----------------
100.00    0.002813                  4347         8 total


strace -T -e accept -p 17535

accept(0, {sa_family=AF_INET, sin_port=htons(52600), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.753892>
accept(0, {sa_family=AF_INET, sin_port=htons(52630), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <0.909187>
accept(0, {sa_family=AF_INET, sin_port=htons(52664), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.949435>
accept(0, {sa_family=AF_INET, sin_port=htons(52699), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.942487>
accept(0, {sa_family=AF_INET, sin_port=htons(52732), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.301445>
accept(0, {sa_family=AF_INET, sin_port=htons(52766), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <0.804619>
accept(0, {sa_family=AF_INET, sin_port=htons(52804), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.945932>
accept(0, {sa_family=AF_INET, sin_port=htons(52880), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.396225>
accept(0, {sa_family=AF_INET, sin_port=htons(52941), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.456224>
accept(0, {sa_family=AF_INET, sin_port=htons(52997), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <0.873295>
accept(0, {sa_family=AF_INET, sin_port=htons(53049), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.704943>
accept(0, {sa_family=AF_INET, sin_port=htons(53082), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.524773>
accept(0, {sa_family=AF_INET, sin_port=htons(53110), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <0.802330>
accept(0, {sa_family=AF_INET, sin_port=htons(53183), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <1.674393>
accept(0, {sa_family=AF_INET, sin_port=htons(53210), sin_addr=inet_addr("127.0.0.1")}, [16]) = 3 <0.780236>


strace -T -e poll -p 17535

poll([{fd=3, events=POLLIN}], 1, 5000)  = 1 ([{fd=3, revents=POLLIN}]) <0.000021>
poll([{fd=4, events=POLLIN|POLLOUT|POLLERR|POLLHUP}], 1, 3000) = 1 ([{fd=4, revents=POLLOUT}]) <0.000091>
poll([{fd=4, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=4, revents=POLLIN}]) <0.000325>
poll([{fd=4, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=4, revents=POLLIN}]) <0.000016>
poll([{fd=4, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=4, revents=POLLIN}]) <0.000223>
poll([{fd=4, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=4, revents=POLLIN}]) <0.000015>
poll([{fd=4, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=4, revents=POLLIN}]) <0.000154>
poll([{fd=5, events=POLLIN|POLLOUT|POLLERR|POLLHUP}], 1, 3000) = 1 ([{fd=5, revents=POLLOUT}]) <0.000079>
poll([{fd=5, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=5, revents=POLLIN}]) <0.000435>
poll([{fd=5, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=5, revents=POLLIN}]) <0.000016>
poll([{fd=5, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=5, revents=POLLIN}]) <0.000270>
poll([{fd=5, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=5, revents=POLLIN}]) <0.000018>
poll([{fd=5, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=5, revents=POLLIN}]) <0.000216>
poll([{fd=6, events=POLLIN|POLLOUT|POLLERR|POLLHUP}], 1, 3000) = 1 ([{fd=6, revents=POLLOUT}]) <0.000079>
poll([{fd=6, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=6, revents=POLLIN}]) <0.000406>
poll([{fd=6, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=6, revents=POLLIN}]) <0.000018>
poll([{fd=6, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=6, revents=POLLIN}]) <0.000269>
poll([{fd=6, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=6, revents=POLLIN}]) <0.000014>
poll([{fd=6, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=6, revents=POLLIN}]) <0.000168>
poll([{fd=7, events=POLLIN|POLLOUT|POLLERR|POLLHUP}], 1, 3000) = 1 ([{fd=7, revents=POLLOUT}]) <0.000051>
poll([{fd=7, events=POLLIN|POLLERR|POLLHUP}], 1, 1471228928) = 1 ([{fd=7, revents=POLLIN}]) <0.000304>


strace -T -e shutdown -p 17535

shutdown(3, SHUT_WR)                    = 0 <0.000038>
shutdown(3, SHUT_WR)                    = 0 <0.000069>
shutdown(3, SHUT_WR)                    = 0 <0.000053>
shutdown(3, SHUT_WR)                    = 0 <0.000042>
shutdown(3, SHUT_WR)                    = 0 <0.000055>
shutdown(3, SHUT_WR)                    = 0 <0.000022>
shutdown(3, SHUT_WR)                    = 0 <0.000041>
shutdown(3, SHUT_WR)                    = 0 <0.000066>
shutdown(3, SHUT_WR)                    = 0 <0.000038>
shutdown(3, SHUT_WR)                    = 0 <0.000096>


strace -T -e write -p 17535

write(8, "2019-11-12 11:50:35:sync respons"..., 234) = 234 <0.000028>
write(8, "2019-11-12 11:50:35:sync respons"..., 8192) = 8192 <0.000032>
write(8, "t_content_time\":\"0.069\"},\"182.92"..., 3707) = 3707 <0.000023>
write(8, "2019-11-12 11:50:35:sync respons"..., 55) = 55 <0.000023>
write(8, "2019-11-12 11:50:35\tprod_log_adm"..., 8192) = 8192 <0.000118>
write(8, "s_200\\\":11,\\\"status_502\\\":0,\\\"cl"..., 8192) = 8192 <0.000043>
write(8, ".55.10\\\":{\\\"status_200\\\":1,\\\"sta"..., 1009) = 1009 <0.000036>
write(3, "\1\6\0\1\0000\0\0Content-Type:application"..., 64) = 64 <0.000057>
write(3, "{\"status\":{\"code\":1,\"message\":\"\346"..., 65528) = 65528 <0.000066>
write(3, "\1\6\0\1]X\0\0", 8)           = 8 <0.000026>
write(3, "1699\",\"package_id\":\"28\",\"member_"..., 23896) = 23896 <0.000034>
write(3, "\1\6\0\1\0\6\2\0003\"}]}}\0\0\1\3\0\1\0\10\0\0\0\0\0\0\0ion", 32) = 32 <0.000057>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000100>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000077>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000107>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000055>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000050>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000050>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000049>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000050>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000051>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000056>
write(3, "\1\6\0\1\0*\6\0Content-type: text/html;"..., 72) = 72 <0.000050>


strace -T -e mmap -p 17535

mmap(NULL, 17269, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e969f000 <0.000025>
mmap(NULL, 2559, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000027>
mmap(NULL, 1445, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000075>
mmap(NULL, 382, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000013>
mmap(NULL, 33606, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e969b000 <0.000013>
mmap(NULL, 2648, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000013>
mmap(NULL, 433, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000012>
mmap(NULL, 945, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000011>
mmap(NULL, 4907, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a2000 <0.000012>
mmap(NULL, 328, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000012>
mmap(NULL, 4306, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a2000 <0.000014>
mmap(NULL, 26190, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e969d000 <0.000018>
mmap(NULL, 5834, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a2000 <0.000013>
mmap(NULL, 393, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a3000 <0.000013>
mmap(NULL, 14736, PROT_READ, MAP_SHARED, 4, 0) = 0x7f68e96a0000 <0.000016>
mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x7f68e96a3000 <0.000013>
mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x7f68e96a3000 <0.000020>
mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x7f68e96a3000 <0.000019>
mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x7f68e96a3000 <0.000018>
mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x7f68e96a3000 <0.000018>
mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x7f68e96a3000 <0.000018>

strace -T -e lstat -p 17535

lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/production//commonConfig.php", {st_mode=S_IFREG|0644, st_size=31218, ...}) = 0 <0.000024>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/production/maintance.php", {st_mode=S_IFREG|0644, st_size=433, ...}) = 0 <0.000026>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/production/qiniu_config.php", {st_mode=S_IFREG|0644, st_size=961, ...}) = 0 <0.000026>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/production/cooperat_config.php", {st_mode=S_IFREG|0644, st_size=3771, ...}) = 0 <0.000021>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/production/CloudMonitorConfig.php", {st_mode=S_IFREG|0644, st_size=1999, ...}) = 0 <0.000023>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/production/firewall.php", {st_mode=S_IFREG|0644, st_size=31700, ...}) = 0 <0.000022>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api/Common/Router.php", {st_mode=S_IFREG|0644, st_size=3398, ...}) = 0 <0.000021>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api/Common", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000020>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000019>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000019>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api/V4/StatReport/StatisticClickHouse/VisitStat.php", {st_mode=S_IFREG|0644, st_size=38836, ...}) = 0 <0.000022>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api/V4/StatReport/StatisticClickHouse", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000071>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api/V4/StatReport", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000027>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api/V4", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000025>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller/Api", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000025>
lstat("/usr/local/nginx-1.8.1/html/apiv4.yundun.com/yundun_api_V4/Controller", {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0 <0.000059>

strace -T -e fstat -p 17535

fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000015>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000014>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000014>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000015>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000015>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000014>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000015>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000014>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000014>
fstat(4, {st_mode=S_IFREG|0644, st_size=21, ...}) = 0 <0.000015>

strace -T -e open -p 17535

open("/usr/local/nginx-1.8.1/html/asdf/monitor.php", O_RDONLY) = 4 <0.000095>
open("/usr/local/nginx-1.8.1/html/asdf/monitor.php", O_RDONLY) = 4 <0.000017>
open("/usr/local/nginx-1.8.1/html/asdf/monitor.php", O_RDONLY) = 4 <0.000020>
open("/usr/local/nginx-1.8.1/html/asdf/monitor.php", O_RDONLY) = 4 <0.000025>
open("/usr/local/nginx-1.8.1/html/asdf/monitor.php", O_RDONLY) = 4 <0.000026>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/Public/index.php", O_RDONLY) = 4 <0.000025>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/autoload.php", O_RDONLY) = 4 <0.000022>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/composer/autoload_real.php", O_RDONLY) = 4 <0.000022>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/composer/ClassLoader.php", O_RDONLY) = 4 <0.000023>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/composer/autoload_namespaces.php", O_RDONLY) = 4 <0.000022>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/composer/autoload_psr4.php", O_RDONLY) = 4 <0.000022>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/composer/autoload_classmap.php", O_RDONLY) = 4 <0.000022>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/composer/autoload_files.php", O_RDONLY) = 4 <0.000022>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/jason-gao/socketlog/php/slog.function.php", O_RDONLY) = 4 <0.000022>
open("/usr/local/nginx-1.8.1/html/Agent_Website_Cluster/ssoagent.yundun.com/sso-backend-server/vendor/jason-gao/socketlog/php/slog.php", O_RDONLY) = 4 <0.000023>

strace -T -e close -p 17535
close(4)                                = 0 <0.000014>
close(3)                                = 0 <0.000016>
close(4)                                = 0 <0.000018>
close(3)                                = 0 <0.000020>
close(4)                                = 0 <0.000016>
close(3)                                = 0 <0.000021>
close(4)                                = 0 <0.000015>
close(3)                                = 0 <0.000021>
close(4)                                = 0 <0.000018>
close(3)                                = 0 <0.000021>
close(4)                                = 0 <0.000018>
close(3)                                = 0 <0.000021>
close(4)                                = 0 <0.000018>
close(3)                                = 0 <0.000021>
close(4)                                = 0 <0.000018>




##
strace -f $(/sbin/pidof php-fpm | sed 's/\([0-9]*\)/\-p \1/g')

##
top
free -m
ps auxw|head -1;ps auxw|sort -rn -k4|head -40      查看消耗内存最多的前40个进程
查看通过命令查看服务器上一共开了多少的 php-cgi 进程：ps -fe |grep "php-fpm"|grep "pool"|wc -l
查看已经有多少个php-cgi进程用来处理tcp请求：netstat -anp|grep "php-fpm"|grep "tcp"|grep "pool"|wc -l
ll /proc/17535/fd


