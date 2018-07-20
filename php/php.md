* php规范
    * https://psr.phphub.org/#toc_3

* call_user_func on a static method
    * https://stackoverflow.com/questions/10534360/php-call-user-func-on-a-static-method
    * https://laravel-china.org/topics/2759/php-anonymous-function-and-call-user-func-thinking

```
$class = '\\MyBundleNamespace\\MyClass';
$method = 'myFunction';

call_user_func("$class::$method");
call_user_func(array($class, $method));

```

* is_readable 
    * 文件在服务器存在才行，不可是远程url
* file_put_contents('file', data) data为二进制内容

