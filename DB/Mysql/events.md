# mysql事件

* show events

# 定时更新表记录
```mysql

CREATE DEFINER=`php`@`172.16.100.%` EVENT `update_ha_log_ip_fortransfer` ON SCHEDULE EVERY 3 SECOND STARTS '2018-05-22 18:35:00' ON COMPLETION NOT PRESERVE DISABLE ON SLAVE DO BEGIN
  update table01 set ip = '1.1.1.1'  where ip =  '1.1.1.2' limit 1000;
  update table02 set ip = '1.1.1.1'  where ip =  '1.1.1.3' limit 1000;
end

```

* 保留最近30天的日志
```mysql

CREATE DEFINER=`php`@`172.16.100.%` EVENT `delete_data_pre30_log` ON SCHEDULE EVERY 1 DAY STARTS '2017-09-26 11:00:00' ON COMPLETION NOT PRESERVE DISABLE ON SLAVE DO BEGIN
  delete from log where created_at<(DATE_SUB(now(),INTERVAL 31 DAY)) limit 20000;
  delete from log where created_at<(DATE_SUB(now(),INTERVAL 31 DAY)) limit 20000;
  delete from log where created_at<(DATE_SUB(now(),INTERVAL 31 DAY)) limit 10000;
end

```