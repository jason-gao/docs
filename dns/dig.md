* 查询所有记录
    * dig baidu.com any
* 查询mx
    * dig www.baidu.com mx
    * dig -t mx 163.com
* 指定dns服务器
    * dig @vipns1.yundun.com www.xx.com
    * dig @8.8.8.8 www.xx.com
    * dig @114.114.114.114 www.xx.com
    * dig @223.5.5.5 www.xx.com
* 查询域名dns服务器
   *  dig www.xx.com ns
   
* 多个服务器
   * for i in `dig vipns1.xx.com +short`;do echo ======DNS:$i======; dig www.xx.com @$i +short;done
   * for i in `dig vipns1.xx.com +short`;do echo ======DNS:$i======; dig www.xx.com @$i +short;done
   
* dig trace
   * dig baidu.com any +trace
   * dig baidu.com ns +trace