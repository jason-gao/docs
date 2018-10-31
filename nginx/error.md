* fastcgi request record is too big
    * https://groups.google.com/forum/#!topic/openresty/JfeEh_aGQrY
    * nginx是将头部这些放在一个record里的，record的长度用16位整数表示，所以不能超过64k,这个没法调整
    
    
* 24 too many open files
    * http://blog.51cto.com/dengxi/1840612
    * https://stackoverflow.com/questions/46172986/nginx-loadbalancer-too-many-open-files