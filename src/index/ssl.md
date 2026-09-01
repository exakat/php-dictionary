# Secure Sockets Layer (SSL)
SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web. SSL is often related to HTTPS, for secured transmission with the HTTP protocol, although HTTPS has moved from SSL to TLS.

SSL is a PHP protocol for sockets, and share the configuration options with TLS. The curl Extension also supports SSL as a client, when building network connections.

PHP also features OpenSSL, a library to handle the cryptographic aspects of SSL. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssl.html","name":"Secure Sockets Layer (SSL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssl.html"]}],"keywords":["acronym","network"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tls.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/passphrase.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/context.php"},{"@type":"CreativeWork","name":"SSL context options","url":"https:\/\/www.php.net\/manual\/en\/context.ssl.php"},{"@type":"CreativeWork","name":"PHP HTTPS and SSL: Securing Data Transmission","url":"https:\/\/codelucky.com\/php-https-ssl\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ssl"}]}]}</script>
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

+ [Transport Layer Security (TLS)](tls.html)
+ [Universal Resource Locator (URL)](url.html)
+ [Passphrase](passphrase.html)
