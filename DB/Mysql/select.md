* 查询区分大小写 【BINARY】【REGEXP】
    * 查询包含大写字母的记录
    * SELECT * FROM member_domain WHERE BINARY domain REGEXP '[A-Z]' limit 100;
    
* left join  where条件
```mysql

SELECT
	mc.member_id,
	m.email,
	mc.domain
FROM
	member_domain AS mc
LEFT JOIN member AS m
on mc.member_id = m.id
where (BINARY domain REGEXP '[A-Z]')
LIMIT 100;

```

* 时间分组 统计每天注册数
   ```mysql
SELECT
	count(id) AS register_count,
	FROM_UNIXTIME(register_time, '%Y-%m-%d') AS datetime
FROM
	table_name
WHERE
	register_time >= '1448899200'
AND register_time < '1450108800'
GROUP BY
	datetime;
```

* 当前时间
    * select now(); --2018-09-04 13:55:54
    * select unix_timestamp(now()); --1536040561
    
    
# 补全为空的数据
    * https://segmentfault.com/q/1010000006663965