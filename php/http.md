# http error
    * https://airbrake.io/blog/http-errors
    * https://airbrake.io/blog/http-errors/400-bad-request

* 传递原始字符串cookie，一般用于在一个项目curl请求到另一个项目，cookie转发
    ```php
$broker->setRequestHeaders('COOKIE', $_SERVER['HTTP_COOKIE']);
  
  public function setRequestHeaders($key, $val)
  {
      $this->headers[$key] = $val;
  }


'headers' => [
    'format' => 'json',
    'Cookie' => $this->httpService->getHeader('cookie'),
],
            
``` 
    