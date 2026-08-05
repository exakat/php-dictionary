# Secure Sockets Layer (SSL)
SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web. SSL is often related to HTTPS, for secured transmission with the HTTP protocol, although HTTPS has moved from SSL to TLS.

SSL is a PHP protocol for sockets, and share the configuration options with TLS. The curl Extension also supports SSL as a client, when building network connections.

PHP also features OpenSSL, a library to handle the cryptographic aspects of SSL. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ssl.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ssl.ini.html","name":"Secure Sockets Layer (SSL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:28:46 +0000","dateModified":"Sun, 02 Aug 2026 06:28:46 +0000","description":"SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Secure Sockets Layer (SSL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/context.php)**
## See Also

+ [SSL context options](https://www.php.net/manual/en/context.ssl.php)
+ [PHP HTTPS and SSL: Securing Data Transmission](https://codelucky.com/php-https-ssl/)

## Related

+ [Transport Layer Security (TLS)](tls.ini.html)
+ [Universal Resource Locator (URL)](url.ini.html)
+ [Passphrase](passphrase.ini.html)
