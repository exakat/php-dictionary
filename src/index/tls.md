# Transport Layer Security (TLS)
``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web. TLS is often related to HTTPS, for secured transmission with the HTTP protocol. It used to be based on SSL.

TLS is a PHP context for sockets, and share the configuration options with SSL.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tls.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tls.html","name":"Transport Layer Security (TLS)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:38:13 +0000","dateModified":"Thu, 20 Aug 2026 08:38:13 +0000","description":"TLS, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tls.html"]}],"keywords":["acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alpn.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/context.php"},{"@type":"CreativeWork","name":"Internet Domain: TCP, UDP, SSL, and TLS","url":"https:\/\/www.php.net\/manual\/en\/transports.inet.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"tls"}]}]}</script>
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

+ [Secure Sockets Layer (SSL)](ssl.html)
+ [QUIC](quic.html)
+ [Application-Layer Protocol Negotiation (ALPN)](alpn.html)
