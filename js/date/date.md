* JavaScript Date对象以及标准时间格式
    * https://codertx.github.io/2016/12/11/about-time/
    * http://momentjs.com/timezone/
 ```js
    const moment = require("./moment-timezone-with-data");
    var date = '2017-09-28T16:00:00Z';
    var timezone = '"Asia/Shanghai';
    moment(date).tz(timezone).format('YYYY-MM-DD hh:mm:ss');
```