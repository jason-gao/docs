- https://www.nginx.com/resources/wiki/start/topics/examples/fastcgiexample/

### error
fastcgi record is too big
- https://github.com/nginx/nginx/blob/master/src/http/modules/ngx_http_fastcgi_module.c
ngx_http_fastcgi_create_request function
```c
if (len > 65535) {
        ngx_log_error(NGX_LOG_ALERT, r->connection->log, 0,
                      "fastcgi request record is too big: %uz", len);
        return NGX_ERROR;
    }
```
- http://nginx.org/en/docs/http/ngx_http_core_module.html#client_body_buffer_size
- http://nginx.org/en/docs/http/ngx_http_fastcgi_module.html#fastcgi_buffer_size
- https://stackoverflow.com/questions/49307750/nginxfcgiwrap-error-fastcgi-request-record-is-too-big?answertab=oldest#tab-top
- https://segmentfault.com/a/1190000009863108
- https://www.oschina.net/question/4044709_2290469?sort=default