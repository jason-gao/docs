@echo off
echo 正在打包apiV4doc…
"C:\Program Files\WinRAR\WinRAR.exe" a -r E:\YunDun\%date:~0,4%%date:~5,2%%date:~8,2%-apiv4doc.rar E:\YunDun\apidoc\api_v4\*.*
echo 退出RAR打包
echo .
exit