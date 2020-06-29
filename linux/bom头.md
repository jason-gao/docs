第一行多了<U+FEFF>字符
读取csv文件，开头字段总是多了个空格，后发现是bom头问题
一定要选择无bom头
- https://www.cnblogs.com/jessezeng/p/6729690.html


less xx.txt
发现词语之前多了一个<U+FEFF>

去掉多余的字符

1）In your terminal, open the file using vim:
vim file_name
2) Remove all BOM characters:
:set nobomb
3) Save the file:
:wq