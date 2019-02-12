nginx.conf主配置添加
http {
    client_header_buffer_size 1024k;
    large_client_header_buffers 4 1024k;
}