* PHP 7.0.30-0 ubuntu0.16.04.1
    * ubuntu 16.04默认是php7.0,没有安装启用pdo_mysql扩展
    * sudo apt install php7.0-mysql
        * 自动安装 mysqlnd、mysqli、pdo_mysql扩展
        * Creating config file /etc/php/7.0/mods-available/pdo_mysql.ini with new version
        
    * 没有phpize
        * sudo apt-install php7.0-dev
        * pecl install redis