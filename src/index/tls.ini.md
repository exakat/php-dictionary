# Transport Layer Security (TLS)
``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web. TLS is often related to HTTPS, for secured transmission with the HTTP protocol. It used to be based on SSL.

TLS is a PHP context for sockets, and share the configuration options with SSL.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/tls.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/tls.ini.html","name":"Transport Layer Security (TLS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Transport Layer Security (TLS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$context = stream_context_create( ['tls' => ['local_cert'=> $certificate_path], ]);

if ($fp = stream_socket_client('tlsv1.2://'.$host.':'.$port, 
                               $errno, 
                               $errstr, 
                               30, 
                               STREAM_CLIENT_CONNECT, 
                               $context,
                               )) {
    fwrite($fp, "\n");
} else {
   echo "Error: $errno - $errstr\n";
}

?>
```

**[Documentation](https://www.php.net/manual/en/context.php)**
## See Also

+ [Internet Domain: TCP, UDP, SSL, and TLS](https://www.php.net/manual/en/transports.inet.php)

## Related

+ [Secure Sockets Layer (SSL)](ssl.ini.html)
