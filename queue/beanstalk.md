* 协议
    * https://raw.githubusercontent.com/kr/beanstalkd/master/doc/protocol.txt
* 分布式
    * http://www.fzb.me/2016-4-1-beanstalkd-in-distributed.html
    * http://www.fzb.me/2015-7-31-beanstalkd-faq.html
    * https://www.jianshu.com/p/b91c741f6567
        集群化方案
        开源的beanstalk是单机版本的队列，集群化需要自己维护。
        上游写入客户端需要做负载均衡和分组的工作（一致性hash）。
        下游读取客户端需要线性扫描读取每个队列并读取。这里面有个问题就是：原来beanstalk设置的读取超时时间，会在现有的策略中放大N倍。