# Socket
A socket refers to a communication endpoint that allows two processes to exchange data over a network. Sockets provide a mechanism for processes on different devices to communicate with each other, whether they are on the same machine or across the Internet.

PHP provides a set of functions for working with sockets, allowing developers to create both client and server applications that can communicate over networks using various protocols, including TCP and UDP.
```php
<?php

    $server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    socket_bind($server, '127.0.0.1', 8080);
    socket_listen($server);
    $client = socket_accept($server);

?>
```

## See Also

+ [PHP and Sockets: Network Programming with PHP](https://reintech.io/blog/php-and-sockets-network-programming)

Related : [Network](Network), [Server](Server), [User Datagram Protocol (UDP)](User Datagram Protocol (UDP)), [TCP](TCP), [Polling](Polling), [Websocket](Websocket), [C10K](C10K), [IMAP](IMAP), [Non-blocking](Non-blocking), [SSH2](SSH2)
