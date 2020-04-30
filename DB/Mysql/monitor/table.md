## 查询数据库里所有表行数
 SELECT
 	table_schema,
	table_name,
	table_rows,
	table_comment
FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'dbnamexx' ORDER BY table_rows DESC;

 SELECT
 	table_schema,
	table_name,
	table_rows,
	table_comment
FROM information_schema.TABLES ORDER BY table_rows DESC;