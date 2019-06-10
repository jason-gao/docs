brew install beanstalkd

==> Downloading https://homebrew.bintray.com/bottles/beanstalkd-1.10.mojave.bott
######################################################################## 100.0%
==> Pouring beanstalkd-1.10.mojave.bottle.tar.gz
==> Caveats
To have launchd start beanstalkd now and restart at login:
  brew services start beanstalkd
Or, if you don't want/need a background service you can just run:
  beanstalkd
==> Summary
🍺  /usr/local/Cellar/beanstalkd/1.10: 7 files, 59.8KB

crystal@crystaldeMac conf.d $ brew services start beanstalkd
==> Successfully started `beanstalkd` (label: homebrew.mxcl.beanstalkd)
crystal@crystaldeMac conf.d $
crystal@crystaldeMac conf.d $ ps -ef |grep beanstalkd
  501 17558     1   0 11:25上午 ??         0:00.00 /usr/local/opt/beanstalkd/bin/beanstalkd