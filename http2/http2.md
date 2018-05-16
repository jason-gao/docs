* https://ruby-china.org/topics/29883
    ```nginx
server {
  listen 443 ssl http2;
  ...
}
```

* 注意： HTTP/2 得在 HTTPS 下面工作，虽然 HTTP/2 本身可以在非 HTTPS 下面工作，但目前还没有浏览器支持！