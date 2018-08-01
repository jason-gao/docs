2016/08/18
==========

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


