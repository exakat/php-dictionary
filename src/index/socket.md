# Socket
A socket refers to a communication endpoint that allows two processes to exchange data over a network. Sockets provide a mechanism for processes on different devices to communicate with each other, whether they are on the same machine or across the Internet.

PHP provides a set of functions for working with sockets, allowing developers to create both client and server applications that can communicate over networks using various protocols, including TCP and UDP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/socket.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/socket.html","name":"Socket","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:37:12 +0000","dateModified":"Sat, 11 Jul 2026 14:37:12 +0000","description":"A socket refers to a communication endpoint that allows two processes to exchange data over a network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Socket.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Network](network.ini.html)
+ [Server](server.ini.html)
+ [User Datagram Protocol (UDP)](udp.ini.html)
+ [TCP](tcp.ini.html)
+ [Polling](polling.ini.html)
+ [Websocket](websocket.ini.html)
+ [C10K](c10k.ini.html)
+ [IMAP](imap.ini.html)
+ [Non-blocking](non-blocking.ini.html)
+ [SSH2](ssh2.ini.html)

## Related packages

+ [react/socket](https://packagist.org/packages/react/socket)
