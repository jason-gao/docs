# 参考
+   https://github.com/qiniu/php-sdk/blob/master/src/Qiniu/Http/Client.php
+   https://github.com/facebook/php-graph-sdk/tree/5.4/src/Facebook/HttpClients


# https request

+   curl
```
$options = [
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $this->compileRequestHeaders($headers),
            CURLOPT_URL => $url,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => $timeOut,
            CURLOPT_RETURNTRANSFER => true, // Follow 301 redirects
            CURLOPT_HEADER => true, // Enable header processing
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_CAINFO => __DIR__ . '/certs/DigiCertHighAssuranceEVRootCA.pem',
        ];
        
```

+   guzzle 
```
$options = [
            'headers' => $headers,
            'body' => $body,
            'timeout' => $timeOut,
            'connect_timeout' => 10,
            'verify' => __DIR__ . '/certs/DigiCertHighAssuranceEVRootCA.pem',
        ];
        $request = $this->guzzleClient->createRequest($method, $url, $options);
        try {
            $rawResponse = $this->guzzleClient->send($request);
        } catch (RequestException $e) {
            $rawResponse = $e->getResponse();
            if ($e->getPrevious() instanceof RingException || !$rawResponse instanceof ResponseInterface) {
                throw new FacebookSDKException($e->getMessage(), $e->getCode());
            }
        }
        $rawHeaders = $this->getHeadersAsString($rawResponse);
        $rawBody = $rawResponse->getBody();
        $httpStatusCode = $rawResponse->getStatusCode();
```

+ stream
```
$options = [
            'http' => [
                'method' => $method,
                'header' => $this->compileHeader($headers),
                'content' => $body,
                'timeout' => $timeOut,
                'ignore_errors' => true
            ],
            'ssl' => [
                'verify_peer' => true,
                'verify_peer_name' => true,
                'allow_self_signed' => true, // All root certificates are self-signed
                'cafile' => __DIR__ . '/certs/DigiCertHighAssuranceEVRootCA.pem',
            ],
        ];
        $this->facebookStream->streamContextCreate($options);
        $rawBody = $this->facebookStream->fileGetContents($url);
        $rawHeaders = $this->facebookStream->getResponseHeaders();
        if ($rawBody === false || empty($rawHeaders)) {
            throw new FacebookSDKException('Stream returned an empty response', 660);
        }
        $rawHeaders = implode("\r\n", $rawHeaders);
```

## no https request
+ curl
```
$ch = curl_init();
        $options = array(
            CURLOPT_USERAGENT => self::userAgent(),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HEADER => true,
            CURLOPT_NOBODY => false,
            CURLOPT_CUSTOMREQUEST  => $request->method,
            CURLOPT_URL => $request->url
        );
        // Handle open_basedir & safe mode
        if (!ini_get('safe_mode') && !ini_get('open_basedir')) {
            $options[CURLOPT_FOLLOWLOCATION] = true;
        }
        if (!empty($request->headers)) {
            $headers = array();
            foreach ($request->headers as $key => $val) {
                array_push($headers, "$key: $val");
            }
            $options[CURLOPT_HTTPHEADER] = $headers;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
        if (!empty($request->body)) {
            $options[CURLOPT_POSTFIELDS] = $request->body;
        }
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
```