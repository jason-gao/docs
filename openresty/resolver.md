# resolver
- https://hambut.com/2016/09/09/how-to-resolve-the-domain-name-in-openresty/
- https://www.cnblogs.com/mentalidade/p/6934162.html
- http://nginx.org/en/docs/http/ngx_http_core_module.html#resolver

1. 读取/etc/resolv.conf dns服务器，动态获取一组，调用resty.dns.resolver query 出解析结果
resty.lrucache 缓存起来，如果是ip直接返回

2.  /etc/hosts 里配置的域名，利用dnsmasq