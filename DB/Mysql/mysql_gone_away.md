* PDOException
* code:HY000
* message:SQLSTATE[HY000]: General error: 2006 MySQL server has gone away
    * https://dev.mysql.com/doc/refman/8.0/en/gone-away.html
    * http://blog.51cto.com/kingbox/1175734
         
* resolve:
    * 改配置： https://matomo.org/faq/troubleshooting/faq_183/ 配置wait_timeout和max_allowed_packet
            * wait_timeout
                * set global wait_timeout=5;  information_schema.GLOBAL_VARIABLES
                    * 测试时候一般设置global ，然后在代码里sleep(xx), 复现 mysql gone away的情况
                * SET session wait_timeout=10;  information_schema.SESSION_VARIABLES
            * max_allowed_packet 默认64M
    * 断线重连  https://blog.csdn.net/fdipzone/article/details/53117541
        * $dbconn->getAttribute(PDO::ATTR_SERVER_INFO);
            * 正常返回：Uptime: 674475  Threads: 10  Questions: 813463  
                Slow queries: 0  Opens: 356  Flush tables: 1  
                Open tables: 398  Queries per second avg: 1.206
            * mysql gone away抛异常返回：pdo对象置为null，reconnect
            * $this->pdo->errorInfo()
                ```php
                array(3) {
                  [0] =>
                  string(5) "HY000"
                  [1] =>
                  int(2006)
                  [2] =>
                  string(26) "MySQL server has gone away"
                }
                
                ```
            * $this->pdo->errorCode()
                  * HY000