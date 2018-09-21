# 外键
* 外键字段貌似必须加索引
    * 删除外键
        * ALTER TABLE `xx` DROP FOREIGN KEY `fk_test_user`;
    * 添加外键
        * ALTER TABLE `xx` ADD CONSTRAINT `fk_test_user` FOREIGN KEY (`test_user`) REFERENCES `db1`.`table1` (`test_user`) ON DELETE SET NULL ON UPDATE CASCADE;