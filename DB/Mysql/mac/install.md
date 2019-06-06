# install

- https://gist.github.com/nrollr/3f57fc15ded7dddddcc4e82fe137b58e

```text

brew install mysql

Updating Homebrew...
==> Auto-updated Homebrew!
Updated 1 tap (homebrew/core).
==> Updated Formulae
axel            fonttools       kubecfg         perl            swiftformat
bazel           gnutls          libqalculate    qalculate-gtk   vim
dartsim         heimdal         notmuch         siril           vim@7.4
dbmate          jena            paket           subversion      weechat

==> Downloading https://homebrew.bintray.com/bottles/mysql-8.0.16.mojave.bottle.
==> Downloading from https://akamai.bintray.com/65/65e6629740ca75ceaae575b4cc68f
######################################################################## 100.0%
==> Pouring mysql-8.0.16.mojave.bottle.tar.gz
==> /usr/local/Cellar/mysql/8.0.16/bin/mysqld --initialize-insecure --user=cryst
==> Caveats
We've installed your MySQL database without a root password. To secure it run:
    mysql_secure_installation

MySQL is configured to only allow connections from localhost by default

To connect run:
    mysql -uroot

To have launchd start mysql now and restart at login:
  brew services start mysql
Or, if you don't want/need a background service you can just run:
  mysql.server start
==> Summary
🍺  /usr/local/Cellar/mysql/8.0.16: 275 files, 269.8MB

# error
mysql -uroot
ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/tmp/mysql.sock' (2)

brew services list

brew services start mysql

==> Successfully started `mysql` (label: homebrew.mxcl.mysql)

quit


```



