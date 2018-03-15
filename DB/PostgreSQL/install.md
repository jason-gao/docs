# windows client【pgAdmin】
+   https://ftp.postgresql.org/pub/pgadmin3/pgadmin4/v1.2/windows/pgadmin4-1.2-x86.exe
+   http://pan.baidu.com/s/1hsE863q

# linux [PostgreSQL server]
+   https://wiki.postgresql.org/wiki/YUM_Installation

# centOs 6 install PostgreSQL server
1. yum install https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-x86_64/pgdg-centos96-9.6-3.noarch.rpm [Install PGDG RPM file]
2. yum list postgresql* 
3. yum install postgresql96-server [Install PostgreSQL]
4. service postgresql-9.6 initdb [Initialize]
5. chkconfig postgresql-9.6 on [Startup - start automatically when the OS starts]
6. service postgresql-9.6 start

# clear
1. yum erase postgresql96* [To remove everything:]



