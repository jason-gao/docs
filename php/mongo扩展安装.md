


	安装mongo 扩展

	1.下载 mongodb 扩展
		wget https://pecl.php.net/get/mongodb-1.7.4.tgz
	
	2.解压
		
		tar -zxvf mongodb-1.7.4.tgz

		cd mongodb-1.7.4

	3.编译
		/usr/local/php-5.6.20/bin/phpize
		./configure --with-php-config=/usr/local/php-5.6.20/bin/php-config
		make && make install 

	4.修改php.ini 文件

	增加 extension=mongodb.so
	