+ http://nginx.org/en/docs/http/ngx_http_auth_basic_module.html

```
location / {
    auth_basic           "closed site";
    auth_basic_user_file conf/htpasswd;
}
```
需要用openssl passwd命令生成密码加密串填入htpasswd文件中admin:nmOPa8MFe5mKY这种形式