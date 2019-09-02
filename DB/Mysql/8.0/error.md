### Authentication plugin 'caching_sha2_password' cannot be loaded: dlopen(/usr/local/mysql/lib/plugin/caching_sha2_password.so, 2): image not found
- https://tableplus.com/blog/2018/07/failed-to-load-caching-sha2-password-authentication-plugin-solved.html
- https://dev.mysql.com/doc/refman/8.0/en/caching-sha2-pluggable-authentication.html#caching-sha2-pluggable-authentication-installation

- ALTER USER 'username’@‘localhost’ IDENTIFIED WITH mysql_native_password BY ‘password’;
