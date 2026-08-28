# User Datagram Protocol (UDP)
UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP.

UDP is connectionless. UDP does not establish a connection before sending data. It simply sends packets, called datagrams, to the destination without checking if the recipient is ready or available.

UDP is fast and lightweight. Because it skips the handshake and error-checking steps, UDP is faster and uses fewer resources than TCP.

UDP is unreliable. UDP does not guarantee delivery, order, or error correction. Packets may be lost, duplicated, or arrive out of order.

UDP is often associated, or opposed to TCP.

UDP is supported through socket programming. PHP provides functions to create, bind, send, and receive UDP datagrams using the ``ext/socket`` extension. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html","name":"User Datagram Protocol (UDP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:38:16 +0000","dateModified":"Thu, 20 Aug 2026 08:38:16 +0000","description":"UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html"]}],"keywords":["acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tcp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/port.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/osi-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quic.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/User_Datagram_Protocol"},{"@type":"CreativeWork","name":"Building a UDP Server, Gaming Client, and Tic-Tac-Toe Game with PHP","url":"https:\/\/medium.com\/@.Chromax\/building-a-udp-server-gaming-client-and-tic-tac-toe-game-with-php-83409d89896e"},{"@type":"CreativeWork","name":"Using PHP To Send A UDP Message","url":"https:\/\/www.robertprice.co.uk\/robblog\/using_php_to_send_a_udp_message-shtml\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"udp"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/User_Datagram_Protocol)**
## See Also

+ [Building a UDP Server, Gaming Client, and Tic-Tac-Toe Game with PHP](https://medium.com/@.Chromax/building-a-udp-server-gaming-client-and-tic-tac-toe-game-with-php-83409d89896e)
+ [Using PHP To Send A UDP Message](https://www.robertprice.co.uk/robblog/using_php_to_send_a_udp_message-shtml/)

## Related

+ [TCP](tcp.html)
+ [Internet Protocol (IP)](ip.html)
+ [Port](port.html)
+ [Socket](socket.html)
+ [OSI Model](osi-model.html)
+ [QUIC](quic.html)
