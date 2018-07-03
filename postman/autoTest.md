* 自动测试
* for example: 新增完域名，给域名下加记录    
    * Pre-req 请求前设置环境变量供body里调用
    ```js
//create random domain as test
var random_domain = "FurthestWorld" + (new Date()).valueOf() + ".com";
postman.setEnvironmentVariable("random_domain", random_domain);
```
* Tests 响应后设置环境变量供其他接口调用
```js


tests["Status code is 200"] = responseCode.code === 200;

var res = JSON.parse(responseBody); 
tests["api return code = 1:"+res.status.code] = (1 == res.status.code);
tests["新增域名 ID:" + res.data.id] = res.data.id;

var added_domain = postman.getEnvironmentVariable("random_domain");
tests["新增域名:" + added_domain] = added_domain;

//save added domain_id for next delete api 
postman.setGlobalVariable("added_domain_id", res.data.id);

```

* 加记录
* Pre-req
    ```js
    
    postman.setEnvironmentVariable("record_domain_id", postman.getGlobalVariable("added_domain_id"));
    
    
    var random_record_name = "FurthestWorld" + (new Date()).valueOf();
    postman.setEnvironmentVariable("random_record_name", random_record_name);
    ```
    
* Tests
    ```js


tests["Status code is 200"] = responseCode.code === 200;

var res = JSON.parse(responseBody); 
tests["api return code = 1:"+res.status.code] = (1 == res.status.code);


tests["api return data is Object"] = true === (res.data instanceof Object);



postman.setGlobalVariable("added_record_id", res.data.id);
```