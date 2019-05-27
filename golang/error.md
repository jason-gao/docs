### unrecognized import path "golang.org/x/sys/unix"
    * https://github.com/spf13/viper/issues/432
    ```bash
    mkdir -p $GOPATH/src/golang.org/x/
    cd !$
    git clone https://github.com/golang/sys.git
    git clone https://github.com/golang/text.git
    cd -
    ```
### Unable to export dependencies to vendor directory: symlink ../values_test.go /xx/vendor/github.com/ugorji/go/codec/bench/values_test.go: operation not supported    