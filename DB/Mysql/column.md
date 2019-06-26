# 添加字段
    - ALTER TABLE `xx` ADD COLUMN `xx` TINYINT (3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否是管理员:1-是，0-否'
    
# 添加多个字段
ALTER TABLE xx 
ADD column `ip_type` TINYINT ( 4 ) NOT NULL DEFAULT '1' COMMENT 'IP类型：1-外网 2-内网' after ip,
ADD column `ip_version` TINYINT ( 4 ) NOT NULL DEFAULT '4' COMMENT 'IP版本: 4/6' after ip_type    