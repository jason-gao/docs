# mysql用一个表更新另一个表
## 1列
update student s, city c
   set s.city_name = c.name
 where s.city_code = c.code;

## 多列
update  a,  b 
set a.title=b.title, a.name=b.name
where a.id=b.id
##子查询
update student s set city_name = (select name from city where code = s.city_code);
