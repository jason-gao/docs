##### curl请求本地添加host域名，解析问题
- ipv6网络问题
- 127.0.0.1       xx.local.me
  ::1             xx.local.me
- error: curl error 28: resolving timed out after
- 不添加ipv6 host解析,命令行ping xx.local.me是可以通的 ，程序里不通
- 必须同时添加ipv4和ipv6 host解析，程序里curl才能通,否则不通或者很慢
- 程序里有通过curl调用域名的，必须要主要这个问题

