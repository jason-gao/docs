* 删除索引
    * ALTER TABLE `xx` DROP INDEX `index_name_xx`;
    
# like 索引
    * like 'xx%' 可以走索引，以xx开头
    * like '%xx%' 不能走索引