### iterm2 使用rz sz
- https://github.com/aikuyun/iterm2-zmodem

####### wget https://github.com/aikuyun/iterm2-zmodem/blob/master/iterm2-recv-zmodem.sh
####### wget https://github.com/aikuyun/iterm2-zmodem/blob/master/iterm2-send-zmodem.sh


- brew install lrzsz
- brew install wget

- sz命令 发送文件到本地
- rz命令 将本地上传文件到服务器


cd /usr/local/bin 
sudo wget https://gist.githubusercontent.com/sy-records/1b3010b566af42f57fa6fa38138dd22a/raw/2bfe590665d3b0e6c8223623922474361058920c/iterm2-send-zmodem.sh 
sudo wget https://gist.githubusercontent.com/sy-records/40f4ba22e3fbdeedf58463b067798962/raw/b32d2f7ac3fa54acca81be3664797cebb724690f/iterm2-recv-zmodem.sh
sudo chmod 777 /usr/local/bin/iterm2-*


设置Iterm2的Tirgger特性，profiles->default->editProfiles->Advanced中的Tirgger

Regular expression	 Action	                Action
\*\*B0100	             Run Silent Coprocess	/usr/local/bin/iterm2-send-zmodem.sh
\*\*B00000000000000	 Run Silent Coprocess	/usr/local/bin/iterm2-recv-zmodem.sh


**每个profile对应的服务器都需要配置**

重启iterm2