### 连表多个,分割的连表
- https://www.cnblogs.com/MPengYu/p/12495215.html

```mysql

SELECT i.*,
GROUP_CONCAT(n.id) nid,
GROUP_CONCAT(n.name) name
FROM i
LEFT JOIN n on FIND_IN_SET(n.id, i.n_id)
GROUP BY i.id


```
- https://img-blog.csdnimg.cn/20200314231052737.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L01QZW5nWXU=,size_16,color_FFFFFF,t_70