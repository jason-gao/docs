# 往文件追加内容
```bash

while true;do  echo $(date "+%Y-%m-%d %H:%M:%S")."ERROR" >> /tmp/test.log;sleep 1;done
while true;do  echo $(date "+%Y-%m-%d %H:%M:%S")."INFO" >> /tmp/test.log;sleep 1;done
while true;do  echo $(date "+%Y-%m-%d %H:%M:%S")."WARN" >> /tmp/test.log;sleep 1;done
while true;do  echo $(date "+%Y-%m-%d %H:%M:%S")."DEBUG" >> /tmp/test.log;sleep 1;done

```

