---
type: "PHP Feature"
title: "HTTP/3"
description: "``HTTP/3`` is the third major version of the HTTP protocol."
resource: "https://www.rfc-editor.org/rfc/rfc9114"
tags: ["protocol", "web"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# HTTP/3

``HTTP/3`` is the third major version of the HTTP protocol. Unlike ``HTTP/1.1`` and ``HTTP/2``, which run over TCP, HTTP/3 runs over ``QUIC``, a transport protocol built on top of UDP.

By moving to QUIC, ``HTTP/3`` removes the TCP-level head-of-line blocking that still affects ``HTTP/2``: a lost packet only stalls the stream it belongs to, not every request multiplexed on the connection. HTTP/3 also inherits QUIC's built-in TLS 1.3 encryption, 0-RTT connection resumption, and connection migration, which is a connection can survive a client switching networks. Header compression is handled by ``QPACK``, an adaptation of HTTP/2's HPACK designed to tolerate QUIC's out-of-order stream delivery.

PHP does not natively supports ``HTTP/3``; it depends on a QUIC-capable extension or client library, and on the underlying TLS stack, with OpenSSL 3.5+, exposing the QUIC APIs the extension needs.

## Documentation
- [https://www.rfc-editor.org/rfc/rfc9114](https://www.rfc-editor.org/rfc/rfc9114)

## See Also
- [PHP speaks QUIC now, and OpenSSL did the hard part](https://dev.to/mikepultz/php-speaks-quic-now-and-openssl-did-the-hard-part-2329)

## Related
- [QUIC](/features/quic.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Hyper Text Transfer Protocol Secure (HTTPS)](/features/https.md)
- [Application-Layer Protocol Negotiation (ALPN)](/features/alpn.md)
- [Transport Layer Security (TLS)](/features/tls.md)

