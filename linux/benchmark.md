* https://github.com/denji/awesome-http-benchmark

# ab测
* https://en.wikipedia.org/wiki/ApacheBench

## install
* ubuntu->sudo apt-get install apache2-utils
* centos->yum -y install httpd-tools
* ab -c10 -n500 http://apiv4php721.yundun.cn/


# wrk
* https://github.com/wg/wrk
* https://github.com/wg/wrk/wiki/Installing-Wrk-on-Linux
## install
### ubuntu
```
sudo apt-get install build-essential libssl-dev git -y
cd /usr/local/src
git clone https://github.com/wg/wrk.git wrk
cd wrk
sudo make
# move the executable to somewhere in your PATH, ex:
sudo cp wrk /usr/local/bin

```
### cnetos
```
sudo yum groupinstall 'Development Tools'
sudo yum install openssl-devel
sudo yum install git
cd /usr/local/src
git clone https://github.com/wg/wrk.git wrk
cd wrk
make
# move the executable to somewhere in your PATH
sudo cp wrk /usr/local/bin

```
* wrk -t12 -c15 -d2s http://127.0.0.1:8080/

## hello world
* php7.2.1
* wrk -t12 -c15 -d10s http://php721.vm
```
Running 10s test @ http://php721.vm
  12 threads and 15 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.84ms    1.06ms  27.74ms   97.51%
    Req/Sec   559.98     69.13     1.72k    87.85%
  67107 requests in 10.10s, 30.08MB read
Requests/sec:   6646.67
Transfer/sec:      2.98MB

```
* php5.6
```
Running 10s test @ http://php56.vm
  12 threads and 15 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     2.44ms    4.91ms  92.77ms   97.63%
    Req/Sec   521.62     84.38   676.00     80.83%
  62542 requests in 10.07s, 28.03MB read
Requests/sec:   6210.28
Transfer/sec:      2.78MB

```

* openresty
```
12 threads and 15 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   849.95us    1.24ms  20.84ms   97.33%
    Req/Sec     1.42k   322.91     6.81k    91.75%
  169587 requests in 10.02s, 30.72MB read
Requests/sec:  16928.99
Transfer/sec:      3.07MB

```
