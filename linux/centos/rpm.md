## install beanstalk
```bash

su -c 'rpm -Uvh http://download.fedora.redhat.com/pub/epel/5/i386/epel-release-5-3.noarch.rpm'
su -c 'yum install beanstalkd --enablerepo=epel-testing'

```