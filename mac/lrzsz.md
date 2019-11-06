### iterm2 使用rz sz
- https://github.com/aikuyun/iterm2-zmodem

- brew install lrzsz
- brew install wget

cd /usr/local/bin

wget https://github.com/aikuyun/iterm2-zmodem/blob/master/iterm2-recv-zmodem.sh

wget https://github.com/aikuyun/iterm2-zmodem/blob/master/iterm2-send-zmodem.sh

chmod 777 /usr/local/bin/iterm2-*


设置Iterm2的Tirgger特性，profiles->default->editProfiles->Advanced中的Tirgger

Regular expression	 Action	                Action
**B0100	             Run Silent Coprocess	/usr/local/bin/iterm2-send-zmodem.sh
**B00000000000000	 Run Silent Coprocess	/usr/local/bin/iterm2-recv-zmodem.sh


重启iterm2