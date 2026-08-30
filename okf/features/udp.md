---
type: "acronym"
title: "User Datagram Protocol (UDP)"
description: "UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP."
resource: "https://en.wikipedia.org/wiki/User_Datagram_Protocol"
tags: ["acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# User Datagram Protocol (UDP)

UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP.

UDP is connectionless. UDP does not establish a connection before sending data. It simply sends packets, called datagrams, to the destination without checking if the recipient is ready or available.

UDP is fast and lightweight. Because it skips the handshake and error-checking steps, UDP is faster and uses fewer resources than TCP.

UDP is unreliable. UDP does not guarantee delivery, order, or error correction. Packets may be lost, duplicated, or arrive out of order.

UDP is often associated, or opposed to TCP.

UDP is supported through socket programming. PHP provides functions to create, bind, send, and receive UDP datagrams using the ``ext/socket`` extension.

```php
<?php

    // Create a UDP socket
    $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    
    if ($socket === false) {
        $error = socket_last_error();
        die('socket_create() failed: ' . socket_strerror($error));
    }
    
    echo "UDP socket created successfully.\n";

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/User_Datagram_Protocol](https://en.wikipedia.org/wiki/User_Datagram_Protocol)

## See Also
- [Building a UDP Server, Gaming Client, and Tic-Tac-Toe Game with PHP](https://medium.com/@.Chromax/building-a-udp-server-gaming-client-and-tic-tac-toe-game-with-php-83409d89896e)
- [Using PHP To Send A UDP Message](https://www.robertprice.co.uk/robblog/using_php_to_send_a_udp_message-shtml/)

## Related
- [TCP](/features/tcp.md)
- [Internet Protocol (IP)](/features/ip.md)
- [Port](/features/port.md)
- [Socket](/features/socket.md)
- [OSI Model](/features/osi-model.md)
- [QUIC](/features/quic.md)

## Details
- Extension: ext-socket

