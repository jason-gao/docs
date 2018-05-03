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