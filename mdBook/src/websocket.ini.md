# Websocket
WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection. Unlike traditional HTTP requests, which are stateless and require a new connection for each request/response cycle, WebSockets keep the connection open, allowing both the client and server to send and receive data anytime without needing to re-establish a connection.

PHP does not have built-in WebSocket support. There are libraries like Ratchet or write a custom WebSocket server using PHP's socket functions.
## See Also

+ [WebSocket with PHP](https://dev.to/robertobutti/websocket-with-php-4k2c)
+ [Building realtime apps with PHP and WebSockets](https://ably.com/topic/websockets-php)

Related : [Socket](Socket), [gRPC (Google Remote Procedure Call)](gRPC (Google Remote Procedure Call)), [Pub/Sub](Pub/Sub), [Real Time](Real Time), [Web Real-Time Communication (WebRTC)](Web Real-Time Communication (WebRTC))
