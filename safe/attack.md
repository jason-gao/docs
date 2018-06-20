* timing attack-时序攻击
    举一个最简单的计时攻击的例子，某个函数负责比较用户输入的密码和存放在系统内密码是否相同，
    如果该函数是从第一位开始比较，发现不同就立即返回，那么通过计算返回的速度就知道了大概是哪一位开始不同的，
    这样就实现了电影中经常出现的按位破解密码的场景。
    密码破解复杂度成千上万倍甚至百万千万倍的下降。
    最简单的防御方法是：发现错误的时候并不立即返回，而是设一个标志位，直到完全比较完两个字符串再返回
 
    * https://www.zhihu.com/question/20156213
    * http://php.net/manual/zh/function.hash-equals.php 
        * 可防止时序攻击的字符串比较：比较两个字符串，无论它们是否相等，本函数的时间消耗是恒定的
    * http://www.wemlion.com/post/timing-atack/
        * 攻击：node v8引擎比较数据是字节比较，一旦发现有一个字节不一样，就会停止，执行时间越长，说明正确的越多
    * http://php.net/manual/zh/function.password-verify.php
        * 时序攻击（timing attacks）对此函数不起作用
 

 
