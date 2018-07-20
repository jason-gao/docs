* 在使用curl做POST的时候, 当要POST的数据大于1024字节的时候, curl并不会直接就发起POST请求, 而是会分为两步
  
  1. 发送一个请求, 包含一个Expect:100-continue, 询问Server使用愿意接受数据
  2. 接收到Server返回的100-continue应答以后, 才把数据POST给Server
    * 并不是所有的Server都会正确应答100-continue, 比如lighttpd, 就会返回417 “Expectation Failed”, 则会造成逻辑出错
 
    * curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));

    * http://www.laruence.com/2011/01/20/1840.html
    * http://docs.guzzlephp.org/en/stable/request-options.html#expect