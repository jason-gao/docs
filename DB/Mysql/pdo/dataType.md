## pdo默认从数据库里查出来的数据都是当字符串处理

- https://learnku.com/laravel/t/33874
- https://stackoverflow.com/questions/25411037/why-does-pdoattr-emulate-prepares-true-returns-all-values-as-strings
- https://stackoverflow.com/questions/10113562/pdo-mysql-use-pdoattr-emulate-prepares-or-not
- https://www.jianshu.com/p/7a9c0bb8fe22


$dbh->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
$dbh->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
    
    