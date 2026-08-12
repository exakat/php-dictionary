# Websocket
WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection. Unlike traditional HTTP requests, which are stateless and require a new connection for each request/response cycle, WebSockets keep the connection open, allowing both the client and server to send and receive data anytime without needing to re-establish a connection.

PHP does not have built-in WebSocket support. There are libraries like Ratchet or write a custom WebSocket server using PHP's socket functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/websocket.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/websocket.html","name":"Websocket","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Websocket.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"websocket"}]}]}</script>
**[Documentation](https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API)**
## See Also

+ [WebSocket with PHP](https://dev.to/robertobutti/websocket-with-php-4k2c)
+ [Building realtime apps with PHP and WebSockets](https://ably.com/topic/websockets-php)

## Related

+ [Socket](socket.html)
+ [gRPC (Google Remote Procedure Call)](grpc.html)
+ [Pub/Sub](pubsub.html)
+ [Real Time](real-time.html)
+ [Web Real-Time Communication (WebRTC)](webrtc.html)

## Related packages

+ [cboden/ratchet](https://packagist.org/packages/cboden/ratchet)
+ [textalk/websocket](https://packagist.org/packages/textalk/websocket)
