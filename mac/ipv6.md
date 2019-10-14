### 关闭ipv6

- Get name of your network device:
  - networksetup -listallnetworkservices
- Disable IPv6 on that device (in this case "Wi-Fi"):
  - networksetup -setv6off Wi-Fi
- You can enable IPv6 again with:
  - networksetup -setv6automatic Wi-Fi
  
