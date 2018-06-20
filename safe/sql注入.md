* 表单提交参数没做验证
    ```php
    $name = "Qadir'; DELETE FROM users;";

    $sql = "SELECT * FROM users WHERE name='{$name}'";

    SELECT * FROM users WHERE name='Qadir'; DELETE FROM users;'

    ```
    * 会删除users表里的所有记录

* thinkphp sql注入
    * http://www.zerokeeper.com/vul-analysis/thinkphp-framework-50x-sql-injection-analysis.html
    