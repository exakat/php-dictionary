# TCP
``TCP``, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol ``IP`` suite. Together with IP, it forms the foundation for Internet communication. TCP is a connection-oriented protocol, meaning it establishes a reliable and secure connection between two devices before data is exchanged.

Key features of ``TCP`` include:

+ Reliability: it ensures the reliable delivery of data by using acknowledgments and retransmission. When a device sends data over a TCP connection, it waits for an acknowledgment from the receiving device. If an acknowledgment is not received, the data is resent.
+ Connection-oriented: before data transfer begins, a connection must be established between the sender and the receiver. This connection is maintained until the data transfer is complete, and then it is terminated.
+ Flow control: it includes mechanisms for flow control, which helps manage the amount of data sent between devices to prevent congestion and ensure efficient communication.
+ Error checking: it includes error-checking mechanisms to detect and retransmit lost or corrupted data. This contributes to the protocol's reliability.
+ Sequencing: it numbers each data packet so that the receiving device can reorder them and ensure that the data is delivered in the correct order.

TCP is commonly used for applications that require high reliability and accurate delivery of data, such as web browsing, file transfers, and email. It operates at the transport layer of the OSI model and works in conjunction with the Internet Protocol, which operates at the network layer. Together, TCP/IP provides a robust and standardized framework for communication over the Internet.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tcp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tcp.html","name":"TCP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:13:59 +0000","dateModified":"Thu, 02 Jul 2026 08:13:59 +0000","description":"``TCP``, which stands for Transmission Control Protocol, is one of the main protocols in the Internet Protocol ``IP`` suite","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/TCP.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"TCP"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Transmission_Control_Protocol)**
## See Also

+ [Example #1 Socket example: Simple TCP/IP server](https://www.php.net/manual/en/sockets.examples.php)

## Related

+ [Socket](socket.html)
+ [Port](port.html)
+ [User Datagram Protocol (UDP)](udp.html)

## Related packages

+ [https://packagist.org/packages/react/socket](https://packagist.org/packages/https://packagist.org/packages/react/socket)
