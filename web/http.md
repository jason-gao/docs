* X-Forwarded-For
    * https://imququ.com/post/x-forwarded-for-header-in-http.html
    
# error
* Request Header Or Cookie Too Large
    * client_header_buffer_size
    * large_client_header_buffers
    * https://huoding.com/2014/12/31/407
    
# Authentication
    * https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Authorization
    * https://developer.mozilla.org/en-US/docs/Web/HTTP/Authentication
    
    * apache .htaccess
    ```
    AuthType Basic
    AuthName "Access to the staging site"
    AuthUserFile /path/to/.htpasswd
    Require valid-user
    ```
    * nginx
    ```
    location /status {                                       
        auth_basic           "Access to the staging site";
        auth_basic_user_file /etc/apache2/.htpasswd;
    }
    ```
## htpasswd 文件里的密码是md5的
    
## http status code
- https://developer.mozilla.org/zh-CN/docs/Web/HTTP/Status/206    