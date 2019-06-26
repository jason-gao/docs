- http://yansu.org/2013/12/11/lamp-in-mac.html

## brew install nginx
==> Downloading https://homebrew.bintray.com/bottles/nginx-1.17.0.mojave.bottle.
==> Downloading from https://akamai.bintray.com/fb/fb48be70e11aa7072281f33cb98ed
######################################################################## 100.0%
==> Pouring nginx-1.17.0.mojave.bottle.tar.gz
==> Caveats
Docroot is: /usr/local/var/www

The default port has been set in /usr/local/etc/nginx/nginx.conf to 8080 so that
nginx can run without sudo.

nginx will load all files in /usr/local/etc/nginx/servers/.

To have launchd start nginx now and restart at login:
  brew services start nginx
Or, if you don't want/need a background service you can just run:
  nginx
==> Summary
🍺  /usr/local/Cellar/nginx/1.17.0: 25 files, 2MB

crystaldeMac:local crystal$ nginx -t
nginx: the configuration file /usr/local/etc/nginx/nginx.conf syntax is ok
nginx: configuration file /usr/local/etc/nginx/nginx.conf test is successful

mkdir /usr/local/etc/nginx/conf.d
vim /usr/local/etc/nginx/nginx.conf

http{
....

include /usr/local/etc/nginx/conf.d/*.conf;


}

cd /usr/local/etc/nginx/conf.d/
vim ./conf.d/default.conf

server {
    listen       80;
    server_name  localhost;

    root /Users/username/Sites/; # 该项要修改为你准备存放相关网页的路径

    location / { 
        index index.php;
        autoindex on; 
    }   

    #proxy the php scripts to php-fpm  
    location ~ \.php$ {
        include /usr/local/etc/nginx/fastcgi.conf;
        fastcgi_intercept_errors on; 
        fastcgi_pass   127.0.0.1:9000; 
    }   

}


## brew install php@7.2

==> php@7.2
To enable PHP in Apache add the following to httpd.conf and restart Apache:
    LoadModule php7_module /usr/local/opt/php@7.2/lib/httpd/modules/libphp7.so

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

Finally, check DirectoryIndex includes index.php
    DirectoryIndex index.php index.html

The php.ini and php-fpm.ini file can be found in:
    /usr/local/etc/php/7.2/

php@7.2 is keg-only, which means it was not symlinked into /usr/local,
because this is an alternate version of another formula.

If you need to have php@7.2 first in your PATH run:
  echo 'export PATH="/usr/local/opt/php@7.2/bin:$PATH"' >> ~/.bash_profile
  echo 'export PATH="/usr/local/opt/php@7.2/sbin:$PATH"' >> ~/.bash_profile

For compilers to find php@7.2 you may need to set:
  export LDFLAGS="-L/usr/local/opt/php@7.2/lib"
  export CPPFLAGS="-I/usr/local/opt/php@7.2/include"    


To have launchd start php@7.2 now and restart at login:
  brew services start php@7.2
Or, if you don't want/need a background service you can just run:
  php-fpm
  

## 安装php扩展

https://segmentfault.com/a/1190000015318756  

### mongodb
pecl install mongodb

### memcached
brew install libmemcached    
/usr/local/Cellar/libmemcached/1.0.18_2
/usr/local/opt/memcached/bin/memcached

brew install pkg-config
/usr/local/Cellar/pkg-config/0.29.2

brew install zlib
/usr/local/Cellar/zlib/1.2.11

pecl install igbinary
pecl install msgpack

pecl install memcached

pecl install redis


Warning: preg_match(): Unknown modifier '7' in Builder.php on line 310
PHP Warning:  preg_match(): Unknown modifier '7' in /usr/local/Cellar/php@7.2/7.2.19/share/php@7.2/pear/PEAR/Builder.php on line 310

Warning: preg_match(): Unknown modifier '7' in /usr/local/Cellar/php@7.2/7.2.19/share/php@7.2/pear/PEAR/Builder.php on line 310

Build process completed successfully
Installing '/usr/local/Cellar/php@7.2/7.2.19/pecl/20170718/redis.so'
install ok: channel://pecl.php.net/redis-4.3.0
Extension redis enabled in php.ini










