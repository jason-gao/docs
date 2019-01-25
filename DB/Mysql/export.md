# 导出csv/xls

```mysql

show databases;
use xx;

 -- 1
select 'product_id','model'
UNION all
SELECT
	product_id, model
FROM
	oc_product 
INTO OUTFILE 'E:/test.csv' 
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\r\n';

 -- 2

select * from oc_product  into outfile 'E:/test.xls'; 


 -- https://stackoverflow.com/questions/5941809/include-headers-when-using-select-into-outfile
SELECT 'ColName1', 'ColName2', 'ColName3'
UNION ALL
SELECT ColName1, ColName2, ColName3
    FROM YourTable
    INTO OUTFILE '/path/outfile' 
 
```

# 导出demo2
```mysql

-- 12月份

SELECT
	m.email,
	m.mobile,
	mr.out_trade_no,
	mr.gmt_payment,
	mr.recharge_type,
	(
		CASE mr.recharge_type
		WHEN 1 THEN
			'支付宝'
		WHEN 2 THEN
			'微信'
		END
	) AS '充值方式',
	mr.trade_no,
	mr.total_fee
FROM
	aa mr
LEFT JOIN bb.member m ON mr.member_id = m.id
WHERE
	mr. STATUS = 1
AND gmt_payment >= '2018-12-01 00:00:00'
AND gmt_payment <= '2019-01-01 00:00:00'
ORDER BY
	mr.id DESC

```

