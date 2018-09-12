* 安装指定版本
    * npm install -g apidoc@0.17.5
* 中文问题 中文组排序问题
    * https://github.com/apidoc/apidoc/issues/432
    * windows下全局安装路径：
        * cd C:\Users\NP-007\AppData\Roaming\npm\node_modules\apidoc\node_modules\apidoc-core\lib\workers
        * git bash
            * cd /c/Users/NP-007/AppData/Roaming/npm/node_modules/apidoc/node_modules/apidoc-core/lib/workers
    * linux下全局路径：
        * cd /usr/local/lib/node_modules/apidoc/node_modules/apidoc-core/lib/workers
    * 可以注释掉替换特殊字符的行
    
    ```js
api_group.js

group = group.replace(/[^\w]/g, ''); --> group = group.replace(/[^\w\u4E00-\u9FA5-_]/g, '');

api_name.js

name = name.replace(/[^\w]/g, ''); --> name = name.replace(/[^\w\u4E00-\u9FA5-_]/g, '');
```
* warn: parser plugin 'apiprivate' not found in block: 1
    * 写个空插件，即可解决
    * https://github.com/jason-gao/apidoc-core
    * cd C:\Users\NP-007\AppData\Roaming\npm\node_modules\apidoc\node_modules\apidoc-core\lib\parsers
    * copy https://github.com/jason-gao/apidoc-core/blob/master/lib/parsers/api_private.js
    * vim C:\Users\NP-007\AppData\Roaming\npm\node_modules\apidoc\node_modules\apidoc-core\lib\indedx.js
    * parsers添加属性  apiprivate               : './parsers/api_private.js'
    
* 私有api配置
   * @apiPrivate notEmpty
    