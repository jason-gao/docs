### error
- https://learning.postman.com/docs/postman/sending-api-requests/interceptor/#capturing-requests
- macos
- Add a manifest file: This is a JSON file (whose structure is defined by Native Messaging) that gives Chrome the absolute path of the executable that the Interceptor extension can talk to. This file will be installed in a location dependent on your operating system:
  
  MacOS: /Users/<username>/Library/Application Support/Google/Chrome/NativeMessagingHosts/com.postman.postmanapp.json
  
  
- MacOS: $HOME/.postman/InterceptorBridge

- 安装Install Interceptor Bridge失败
- 手动检测上面文件是否存在
  