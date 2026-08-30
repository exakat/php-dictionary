---
type: "PHP Feature"
title: "Socket"
description: "A socket refers to a communication endpoint that allows two processes to exchange data over a network."
resource: "https://www.php.net/manual/en/book.sockets.php"
tags: ["network"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/book.sockets.php](https://www.php.net/manual/en/book.sockets.php)

## See Also
- [PHP and Sockets: Network Programming with PHP](https://reintech.io/blog/php-and-sockets-network-programming)

## Related
- [Network](/features/network.md)
- [Server](/features/server.md)
- [User Datagram Protocol (UDP)](/features/udp.md)
- [TCP](/features/tcp.md)
- [Polling](/features/polling.md)
- [Websocket](/features/websocket.md)
- [C10K](/features/c10k.md)
- [IMAP](/features/imap.md)
- [Non-blocking](/features/non-blocking.md)
- [SSH2](/features/ssh2.md)

## Details
- Packagist: [react/socket](https://packagist.org/packages/react/socket)

