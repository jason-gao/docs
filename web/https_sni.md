* https://zzyongx.github.io/blogs/https-SNI.html
* https://zh.wikipedia.org/wiki/%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%90%8D%E7%A7%B0%E6%8C%87%E7%A4%BA
* https://www.yodfz.com/detail/1/%E5%BE%AE%E4%BF%A1%E5%B0%8F%E7%A8%8B%E5%BA%8Fwx.request%20request:fail%20ssl%20hand%20shake%20error.html
* https://www.alibabacloud.com/help/zh/faq-detail/43742.htm

当进行TLS连接时，客户端从Web服务器请求数字证书。服务器一旦发送证书，
客户端就会检查这个证书，并将其尝试连接的名称与证书中包含的名称进行对比。
如果发生匹配，则连接正常进行。如果没有找到匹配，
则可能会向用户警告该差异，并且可能会中止连接，因为该失配可能表明存在中间人攻击。
不过，某些应用程序允许用户绕过警告继续进行连接，由用户承担信任证书以及连接的责任。