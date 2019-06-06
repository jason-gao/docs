# install node

brew install node

```text
==> Installing dependencies for node: icu4c
==> Installing node dependency: icu4c
==> Downloading https://homebrew.bintray.com/bottles/icu4c-64.2.mojave.bottle.ta
==> Downloading from https://akamai.bintray.com/e8/e858556120acc0c2d52b8fb572b67
######################################################################## 100.0%
==> Pouring icu4c-64.2.mojave.bottle.tar.gz
==> Caveats
icu4c is keg-only, which means it was not symlinked into /usr/local,
because macOS provides libicucore.dylib (but nothing else).

If you need to have icu4c first in your PATH run:
  echo 'export PATH="/usr/local/opt/icu4c/bin:$PATH"' >> ~/.bash_profile
  echo 'export PATH="/usr/local/opt/icu4c/sbin:$PATH"' >> ~/.bash_profile

For compilers to find icu4c you may need to set:
  export LDFLAGS="-L/usr/local/opt/icu4c/lib"
  export CPPFLAGS="-I/usr/local/opt/icu4c/include"

==> Summary
🍺  /usr/local/Cellar/icu4c/64.2: 257 files, 69.2MB
==> Installing node
==> Downloading https://homebrew.bintray.com/bottles/node-12.3.1.mojave.bottle.t
==> Downloading from https://akamai.bintray.com/4d/4ded0c82859da5c88b37e4295e95d
######################################################################## 100.0%
==> Pouring node-12.3.1.mojave.bottle.tar.gz
==> Caveats
Bash completion has been installed to:
  /usr/local/etc/bash_completion.d
==> Summary
🍺  /usr/local/Cellar/node/12.3.1: 4,505 files, 53.8MB
==> Caveats
==> icu4c
icu4c is keg-only, which means it was not symlinked into /usr/local,
because macOS provides libicucore.dylib (but nothing else).

If you need to have icu4c first in your PATH run:
  echo 'export PATH="/usr/local/opt/icu4c/bin:$PATH"' >> ~/.bash_profile
  echo 'export PATH="/usr/local/opt/icu4c/sbin:$PATH"' >> ~/.bash_profile

For compilers to find icu4c you may need to set:
  export LDFLAGS="-L/usr/local/opt/icu4c/lib"
  export CPPFLAGS="-I/usr/local/opt/icu4c/include"

==> node
Bash completion has been installed to:
  /usr/local/etc/bash_completion.d
  
```


# install apidoc 

crystaldeMac:~ crystal$ npm install apidoc -g
/usr/local/bin/apidoc -> /usr/local/lib/node_modules/apidoc/bin/apidoc
+ apidoc@0.17.7
added 66 packages from 44 contributors in 18.362s

