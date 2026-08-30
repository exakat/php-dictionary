---
type: "PHP Feature"
title: "Websocket"
description: "WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection."
resource: "https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API"
tags: ["network"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Websocket

WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection. Unlike traditional HTTP requests, which are stateless and require a new connection for each request/response cycle, WebSockets keep the connection open, allowing both the client and server to send and receive data anytime without needing to re-establish a connection.

PHP does not have built-in WebSocket support. There are libraries like Ratchet or write a custom WebSocket server using PHP's socket functions.

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API](https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API)

## See Also
- [WebSocket with PHP](https://dev.to/robertobutti/websocket-with-php-4k2c)
- [Building realtime apps with PHP and WebSockets](https://ably.com/topic/websockets-php)

## Related
- [Socket](/features/socket.md)
- [gRPC (Google Remote Procedure Call)](/features/grpc.md)
- [Pub/Sub](/features/pubsub.md)
- [Real Time](/features/real-time.md)
- [Web Real-Time Communication (WebRTC)](/features/webrtc.md)

## Details
- Packagist: [cboden/ratchet](https://packagist.org/packages/cboden/ratchet)
- Packagist: [textalk/websocket](https://packagist.org/packages/textalk/websocket)

