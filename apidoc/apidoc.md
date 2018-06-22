* 中文问题
    * https://github.com/apidoc/apidoc/issues/432
    * windows下全局安装路径：C:\Users\NP-007\AppData\Roaming\npm\node_modules\apidoc\node_modules\apidoc-core\lib\workers
    * linux下全局路径：/usr/local/lib/node_modules/apidoc/node_modules/apidoc-core/lib/workers
    * 可以注释掉替换特殊字符的行
    ```js
node_modules/apidoc-core/lib/workers/api_group.js

group = group.replace(/[^\w]/g, ''); --> group = group.replace(/[^\w\u4E00-\u9FA5]/g, '');

api_name.js

name = name.replace(/[^\w]/g, ''); --> name = name.replace(/[^\w\u4E00-\u9FA5]/g, '');
```
    