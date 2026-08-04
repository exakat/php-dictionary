# Secure Sockets Layer (SSL)
SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web. SSL is often related to HTTPS, for secured transmission with the HTTP protocol, although HTTPS has moved from SSL to TLS.

SSL is a PHP protocol for sockets, and share the configuration options with TLS. The curl Extension also supports SSL as a client, when building network connections.

PHP also features OpenSSL, a library to handle the cryptographic aspects of SSL. 
```php
<?php

    $context = stream_context_create( ['ssl' => ['local_cert'=> $certificate_path]] );
    
    if ($fp = stream_socket_client('ssl://'.$host.':'.$port, $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context)) {
        fwrite($fp, "\n");
    } else {
       echo "Error: $errno - $errstr\n";
    }

?>
```

## See Also

+ [SSL context options](https://www.php.net/manual/en/context.ssl.php)
+ [PHP HTTPS and SSL: Securing Data Transmission](https://codelucky.com/php-https-ssl/)

Related : [Transport Layer Security (TLS)](Transport Layer Security (TLS)), [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [Passphrase](Passphrase)
