# Socket
A socket refers to a communication endpoint that allows two processes to exchange data over a network. Sockets provide a mechanism for processes on different devices to communicate with each other, whether they are on the same machine or across the Internet.

PHP provides a set of functions for working with sockets, allowing developers to create both client and server applications that can communicate over networks using various protocols, including TCP and UDP.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html","name":"Socket","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:37:12 +0000","dateModified":"Sat, 11 Jul 2026 14:37:12 +0000","description":"A socket refers to a communication endpoint that allows two processes to exchange data over a network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"]}],"keywords":["network"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/network.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/server.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tcp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/websocket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/c10k.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh2.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.sockets.php"},{"@type":"CreativeWork","name":"PHP and Sockets: Network Programming with PHP","url":"https:\/\/reintech.io\/blog\/php-and-sockets-network-programming"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"socket"}]}]}</script>
```php
<?php

    $server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    socket_bind($server, '127.0.0.1', 8080);
    socket_listen($server);
    $client = socket_accept($server);

?>
```

**[Documentation](https://www.php.net/manual/en/book.sockets.php)**
## See Also

+ [PHP and Sockets: Network Programming with PHP](https://reintech.io/blog/php-and-sockets-network-programming)

## Related

+ [Network](network.html)
+ [Server](server.html)
+ [User Datagram Protocol (UDP)](udp.html)
+ [TCP](tcp.html)
+ [Polling](polling.html)
+ [Websocket](websocket.html)
+ [C10K](c10k.html)
+ [IMAP](imap.html)
+ [Non-blocking](non-blocking.html)
+ [SSH2](ssh2.html)

## Related packages

+ [react/socket](https://packagist.org/packages/react/socket)
