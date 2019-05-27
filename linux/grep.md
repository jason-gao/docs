* 排除
    *  -v, --invert-match
                    Invert the sense of matching, to select non-matching lines.
* 排除#的行
    * cat /etc/apt/sources.list |grep -v "^#"
    
* 内容搜索
    * grep -i '\"start_time\":\"2018-12-13' /tmp/apiV4.log > /tmp/test.log
    * grep -i '\"log_type\":\"waf\"' /tmp/test.log > /tmp/testf.log
    * ll -lth /tmp/testf.log
    * sz /tmp/testf.log
    * grep -r  go-go1.7 ~ 家目录全局搜索
        
* 查看前后几行-前后20行
* cat  /var/log/xx.log |grep -C 20 185838

