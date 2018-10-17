# 参考：
+   https://www.oschina.net/translate/top-20-mysql-best-practices
+   https://code.tutsplus.com/tutorials/top-20-mysql-best-practices--net-7855

# 索引优化
* https://tech.meituan.com/mysql_index.html

 * in索引问题
    * https://www.zhihu.com/question/47729666
    * http://mysqlserverteam.com/you-asked-for-it-new-default-for-eq_range_index_dive_limit/
    * 问题：当where in中的数量超过10的时候，索引失效，当where in中的数量小于10的时候，索引有效
    * eq_range_index_dive_limit  这个参数影响in是否使用索引， 5.6 默认值是10 5.7 默认值是 200
    
# count(*)优化
  * http://mysql.taobao.org/monthly/2016/06/10/
  * https://blog.csdn.net/kjsoftware/article/details/76762208  