crystal@crystaldeMac ~ $ brew install openresty/brew/openresty
==> Tapping openresty/brew
Cloning into '/usr/local/Homebrew/Library/Taps/openresty/homebrew-brew'...
remote: Enumerating objects: 72, done.
remote: Counting objects: 100% (72/72), done.
remote: Compressing objects: 100% (72/72), done.
remote: Total 72 (delta 1), reused 30 (delta 0), pack-reused 0
Unpacking objects: 100% (72/72), done.
Tapped 62 formulae (163 files, 135.5KB).
==> Installing openresty from openresty/brew
==> Installing dependencies for openresty/brew/openresty: geoip and openresty/brew/openresty-openssl
==> Installing openresty/brew/openresty dependency: geoip
==> Downloading https://homebrew.bintray.com/bottles/geoip-1.6.12.mojave.bottle.1.tar.gz
######################################################################## 100.0%
==> Pouring geoip-1.6.12.mojave.bottle.1.tar.gz
🍺  /usr/local/Cellar/geoip/1.6.12: 18 files, 553.0KB
==> Installing openresty/brew/openresty dependency: openresty/brew/openresty-openssl
==> Downloading https://www.openssl.org/source/openssl-1.1.0j.tar.gz
######################################################################## 100.0%
==> Downloading https://raw.githubusercontent.com/openresty/openresty/master/patches/openssl-1.1.0d-sess_set_get_cb_yield.patch
######################################################################## 100.0%
==> Patching
==> Applying openssl-1.1.0d-sess_set_get_cb_yield.patch
patching file include/openssl/bio.h
Hunk #1 succeeded at 217 (offset -3 lines).
patching file include/openssl/ssl.h
Hunk #1 succeeded at 812 (offset 21 lines).
Hunk #2 succeeded at 821 (offset 21 lines).
Hunk #3 succeeded at 1054 (offset 21 lines).
Hunk #4 succeeded at 1461 with fuzz 1 (offset 31 lines).
patching file ssl/bio_ssl.c
Hunk #1 succeeded at 139 (offset 1 line).
Hunk #2 succeeded at 215 (offset 1 line).
Hunk #3 succeeded at 372 (offset 1 line).
patching file ssl/ssl_lib.c
Hunk #1 succeeded at 3187 (offset 205 lines).
patching file ssl/ssl_sess.c
Hunk #2 succeeded at 512 (offset 8 lines).
Hunk #3 succeeded at 901 (offset 9 lines).
patching file ssl/statem/statem.c
Hunk #1 succeeded at 589 (offset 6 lines).
Hunk #2 succeeded at 620 (offset 6 lines).
patching file ssl/statem/statem.h
patching file ssl/statem/statem_srvr.c
Hunk #1 succeeded at 1162 (offset -3 lines).
patching file util/libssl.num
==> perl ./Configure --prefix=/usr/local/Cellar/openresty-openssl/1.1.0j_1 --openssldir=/usr/local/etc/openssl@1.1 --libdir=lib no-threads shared zlib -g enable-ssl3 enable-ssl3-method darwin64-x86_64-cc
==> make
==> make install MANDIR=/usr/local/Cellar/openresty-openssl/1.1.0j_1/share/man MANSUFFIX=ssl
==> Caveats
openresty-openssl is keg-only, which means it was not symlinked into /usr/local,
because only for use with OpenResty.

If you need to have openresty-openssl first in your PATH run:
  echo 'export PATH="/usr/local/opt/openresty-openssl/bin:$PATH"' >> ~/.bash_profile

For compilers to find openresty-openssl you may need to set:
  export LDFLAGS="-L/usr/local/opt/openresty-openssl/lib"
  export CPPFLAGS="-I/usr/local/opt/openresty-openssl/include"

For pkg-config to find openresty-openssl you may need to set:
  export PKG_CONFIG_PATH="/usr/local/opt/openresty-openssl/lib/pkgconfig"

==> Summary
🍺  /usr/local/Cellar/openresty-openssl/1.1.0j_1: 6,667 files, 15.4MB, built in 4 minutes 22 seconds
==> Installing openresty/brew/openresty
==> Downloading https://openresty.org/download/openresty-1.15.8.1.tar.gz
######################################################################## 100.0%
==> ./configure --prefix=/usr/local/Cellar/openresty/1.15.8.1 --pid-path=/usr/local/var/run/openresty.pid --lock-path=/usr/local/var/run/openresty.lock --conf-path=/usr/local/etc/openresty/nginx.conf --ht
==> make

==> make install
==> Caveats
To have launchd start openresty/brew/openresty now and restart at login:
  brew services start openresty/brew/openresty
Or, if you don't want/need a background service you can just run:
  openresty
==> Summary
🍺  /usr/local/Cellar/openresty/1.15.8.1: 303 files, 6.5MB, built in 1 minute 15 seconds
==> Caveats
==> openresty-openssl
openresty-openssl is keg-only, which means it was not symlinked into /usr/local,
because only for use with OpenResty.

If you need to have openresty-openssl first in your PATH run:
  echo 'export PATH="/usr/local/opt/openresty-openssl/bin:$PATH"' >> ~/.bash_profile

For compilers to find openresty-openssl you may need to set:
  export LDFLAGS="-L/usr/local/opt/openresty-openssl/lib"
  export CPPFLAGS="-I/usr/local/opt/openresty-openssl/include"

For pkg-config to find openresty-openssl you may need to set:
  export PKG_CONFIG_PATH="/usr/local/opt/openresty-openssl/lib/pkgconfig"

==> openresty
To have launchd start openresty/brew/openresty now and restart at login:
  brew services start openresty/brew/openresty
Or, if you don't want/need a background service you can just run:
  openresty
  
  
  
crystal@crystaldeMac ~ $ openresty -V
nginx version: openresty/1.15.8.1
built by clang 10.0.1 (clang-1001.0.46.4)
built with OpenSSL 1.1.0j  20 Nov 2018
TLS SNI support enabled
configure arguments: --prefix=/usr/local/Cellar/openresty/1.15.8.1/nginx --with-cc-opt='-O2 -I/usr/local/include -I/usr/local/opt/pcre/include -I/usr/local/opt/openresty-openssl/include' --add-module=../ngx_devel_kit-0.3.1rc1 --add-module=../echo-nginx-module-0.61 --add-module=../xss-nginx-module-0.06 --add-module=../ngx_coolkit-0.2 --add-module=../set-misc-nginx-module-0.32 --add-module=../form-input-nginx-module-0.12 --add-module=../encrypted-session-nginx-module-0.08 --add-module=../srcache-nginx-module-0.31 --add-module=../ngx_lua-0.10.15 --add-module=../ngx_lua_upstream-0.07 --add-module=../headers-more-nginx-module-0.33 --add-module=../array-var-nginx-module-0.05 --add-module=../memc-nginx-module-0.19 --add-module=../redis2-nginx-module-0.15 --add-module=../redis-nginx-module-0.3.7 --add-module=../ngx_stream_lua-0.0.7 --with-ld-opt='-Wl,-rpath,/usr/local/Cellar/openresty/1.15.8.1/luajit/lib -L/usr/local/lib -L/usr/local/opt/pcre/lib -L/usr/local/opt/openresty-openssl/lib' --pid-path=/usr/local/var/run/openresty.pid --lock-path=/usr/local/var/run/openresty.lock --conf-path=/usr/local/etc/openresty/nginx.conf --http-log-path=/usr/local/var/log/nginx/access.log --error-log-path=/usr/local/var/log/nginx/error.log --with-pcre-jit --with-ipv6 --with-stream --with-stream_ssl_module --with-stream_ssl_preread_module --with-http_v2_module --without-mail_pop3_module --without-mail_imap_module --without-mail_smtp_module --with-http_stub_status_module --with-http_realip_module --with-http_addition_module --with-http_auth_request_module --with-http_secure_link_module --with-http_random_index_module --with-http_geoip_module --with-http_gzip_static_module --with-http_sub_module --with-http_dav_module --with-http_flv_module --with-http_mp4_module --with-http_gunzip_module --with-threads --with-dtrace-probes --with-stream --with-stream_ssl_preread_module --with-http_ssl_module

  
  
 # start
  brew services start openresty/brew/openresty
  
  