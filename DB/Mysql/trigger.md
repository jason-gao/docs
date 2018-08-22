2016/08/18
==========
* https://www.w3resource.com/mysql/mysql-triggers.php
* https://blog.csdn.net/freshlover/article/details/50631016

- 如果BEFORE型触发器执行失败，相应行的操作也不会被执行。
-  BEFORE型触发器是有对行的插入或修改行为激活，无论后续的插入或修改是否成功。
-  只有当所有的BEFORE型触发器和所有的行操作全部执行成功，AFTER型触发器才被执行。
-  如果BEFORE或AFTER触发器在执行过程中出现错误，将导致调用触发器的整个SQL语句执行失败。
-  对于事务性表，触发器SQL语句如果执行失败，那么由此执行引起的所有改变都将回滚。
  
MySQL触发器（TRIGGER）
MySQL中，触发器是一种与数据表事件相关的特殊形式的存储过程，是建在表上的命名数据库对象，
触发器常用于加强数据的完整性约束和复杂的业务规则等。

先说说触发器的特点：
建在表上：触发器定义在特定的数据表上，这个表可叫做触发器表。
触发器可以查询其他表，引用其他表的字段，可以包含复杂的SQL语句。触发器所在表必须为永久性表，
不能将触发程序与TEMPORARY表或视图关联起来。

由事件触发：不同于存储过程，触发器不能手动调用，也不能接收、传送参数。
必须对表上INSERT、UPDATE 或 DELETE 操作定义了触发器，然后对应地执行 INSERT、UPDATE 或 DELETE 操作时，
该触发器才可被激活，触发程序自动执行。

可调用存储过程：为响应数据库的变化，触发器可以调用一个或多个存储过程，保证数据完整性、一致性。

CREATE TRIGGER trigger_name trigger_time trigger_event     
ON tbl_name 
FOR EACH ROW 
trigger_stmt

DROP TRIGGER [IF EXISTS] [schema_name.]trigger_name

* SHOW TRIGGERS

# 触发器
1. Definer example:php@127.0.0.1 , 必须和mysql.user里的Host和User对应，即必须有此条记录

# example

```
-- 2016/05/05
-- dns hash 目录触发器


drop trigger if exists default_trigger; 

create DEFINER=`php`@`172.16.100.%` trigger default_trigger before insert on domains for each row set NEW.hash_md5_dir = substring(lower(md5(NEW.name)), 1, 2);

-- 查看触发器
SHOW TRIGGERS
```

## example 02

```
delimiter ||

drop trigger if exists insert_dns_use_yd_log_ns||

create DEFINER=`php`@`172.16.100.%` trigger insert_dns_use_yd_log_ns after update on member_domain_ns for each row
begin   
	if new.useyundun != old.useyundun then
		insert into dns_use_yd_log (`domain`, last_useyd, now_useyd, addtime) values (old.domain, old.useyundun, new.useyundun, now());
	end if; 
end||

delimiter ;

```


