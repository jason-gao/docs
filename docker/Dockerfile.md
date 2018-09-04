    * https://itbilu.com/linux/docker/VyhM5wPuz.html#cmd-add
* https://docs.docker.com/develop/develop-images/dockerfile_best-practices/

    * EXPOSE用于指定容器在运行时监听的端口，可以多行指定多个
        * EXPOSE <port> [<port>...]
    * ENV用于设置环境变量，其有以下两种设置形式：
        * ENV <key> <value>
          ENV <key>=<value> ...
        * 这些环境变量不仅可以构建镜像过程使用，使用该镜像创建的容器中也可以使用        
    * ADD用于复制构建环境中的文件或目录到镜像中。其有以下两种使用方式：
        * ADD <src>... <dest>
          ADD ["<src>",... "<dest>"]      

# question
  * Dockerfile里显示的EXPOSE端口越来越多，如何管理？
  * 容器启的端口越来越多，如何管理？
  * 容器卷如何管理？
  