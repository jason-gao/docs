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