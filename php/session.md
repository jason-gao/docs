## 自定义session.serialize_handler
- https://gist.github.com/yohgaki/432579e535ae97856a1227e4d47d0e2e
- https://wiki.php.net/rfc/user_defined_session_serializer

```php
<?php
// This code is to explain why current API is not good for user defined serializer.
// https://wiki.php.net/rfc/user_defined_session_serializer
ob_start();
ini_set('session.serialize_handler', 'php_serialize');
ini_set('session.save_handler', 'files');
ini_set('session.save_path', '/tmp');
ini_set('session.use_strict_mode', 0);
//Note: Use of save handler for user defined serializer requires needless
//      two PHP serialize()/unserialize() calls for loading/saving session data.
class MyHandler extends SessionHandler {
	// This is stupid function becase 
	// it converts JSON serialized data string to array, 
	// then it converts the array to PHP serilize()ed string, 
	// then session serializer converts PHP serialized()ed string to array, _again_.
	// This is what this code does.
	function read($session_id) {
		$json = parent::read($session_id);
		$php_serialized = serialize(json_decode($json));
		return $php_serialized;
	}
	// Stupid code for the reason above.
	function write($session_id, $session_data) {
		$json = json_encode(unserialize($session_data));
		return parent::write($session_id, $json);
	}
}
// Current PHP forces users to write stupid code.
session_set_save_handler(new MyHandler);
session_id('SESSIONTEST');
session_start();
$_SESSION['abc']=1234;
session_commit();
session_start();
var_dump($_SESSION);
/* To do the same with user defined serializer RFC
https://wiki.php.net/rfc/user_defined_session_serializer
Following code is required to do the same. This code
is more efficient and precise.
i.e. 
Efficient: No stupid array to PHP serializ()ed string, the stirng to array, array 
to JSON string converions. There is only "array" to "JSON string" conversion for
saving session data. This code is 25% faster than above code.
Precise: It uses session's submodule structure correctly. It does not requires to 
override C written save handler which crated number of problems. This code is much
cleaner than above code.
session_set_serializer(
  function ($arr) {
    return json_encode($arr);
  },
  function ($str) {
   return $str ? json_decode($str) : [];
  }
);
*/
```