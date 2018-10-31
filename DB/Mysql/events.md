# mysql事件
* https://segmentfault.com/a/1190000015239896

* show events
* 打开事件调度
    * 添加事件不生效？
    * show variables like '%event_scheduler%';
    * SET GLOBAL event_scheduler = ON;


# 定时更新表记录
```mysql

CREATE DEFINER=`xx`@`xx.xx.xx.%` EVENT `update_ha_log_ip_fortransfer` ON SCHEDULE EVERY 3 SECOND STARTS '2018-05-22 18:35:00' ON COMPLETION NOT PRESERVE DISABLE ON SLAVE DO 
  update table01 set ip = '1.1.1.1'  where ip =  '1.1.1.2' limit 1000;
  update table02 set ip = '1.1.1.1'  where ip =  '1.1.1.3' limit 1000;


```

# 保留最近30天的日志
```mysql

CREATE DEFINER=`xx`@`172.16.100.%` EVENT `delete_data_pre30_log` ON SCHEDULE EVERY 1 DAY STARTS '2017-09-26 11:00:00' ON COMPLETION NOT PRESERVE DISABLE ON SLAVE DO 
  delete from log where created_at<(DATE_SUB(now(),INTERVAL 31 DAY)) limit 20000;
  delete from log where created_at<(DATE_SUB(now(),INTERVAL 31 DAY)) limit 20000;
  delete from log where created_at<(DATE_SUB(now(),INTERVAL 31 DAY)) limit 10000;


```

# 定时更新状态
```mysql

CREATE DEFINER=`xx`@`172.16.100.%` EVENT `update_cpv4_member_plan` ON SCHEDULE EVERY 3 SECOND STARTS '2018-05-23 09:42:00' ON COMPLETION NOT PRESERVE DISABLE ON SLAVE DO 
  update cpv4_member_plan set plan_status=2 where expire_time <= NOW() limit 100;


```


-- 开启事件调度的支持
SET GLOBAL event_scheduler = 1;
-- 列出事件
SHOW EVENTS;
SHOW CREATE EVENT del_user;
  
-- 查询触发器是否启动。
SHOW VARIABLES LIKE 'event_scheduler'; 

-- 定义存储过程  （修改test表里面的id都为5）
DELIMITER //
DROP PROCEDURE IF EXISTS usp_update_test;
CREATE PROCEDURE usp_update_test()
-- expire_interval: the unit is hour
-- delete_per_count: specify the count do every delete operation
BEGIN
    DECLARE id INT;
		SET id=5;   
		update test set id=id;
END //
DELIMITER ;
-- 定义事件  （一分钟执行一次上面的存储过程）
DROP EVENT IF EXISTS del_test;
CREATE EVENT del_test
ON SCHEDULE EVERY 1 MINUTE
DO
CALL usp_update_test()