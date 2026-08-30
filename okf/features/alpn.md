---
type: "acronym"
title: "Application-Layer Protocol Negotiation (ALPN)"
description: "``ALPN`` is a TLS extension that lets a client and server agree on which application protocol to use over an encrypted connection, as part of the TLS handshake itself, rather than after the connection is already open."
resource: "https://www.rfc-editor.org/rfc/rfc7301"
tags: ["acronym", "protocol"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Application-Layer Protocol Negotiation (ALPN)

``ALPN`` is a TLS extension that lets a client and server agree on which application protocol to use over an encrypted connection, as part of the TLS handshake itself, rather than after the connection is already open.

During the handshake, the client sends a list of protocols it supports, such as ``h3`` for HTTP/3, ``h2`` for HTTP/2, or ``http/1.1``, and the server picks one and confirms it before the connection finishes negotiating. This avoids the extra round trip that protocol detection would otherwise cost, and is how browsers and servers agree to speak HTTP/2 or HTTP/3 without first trying and falling back.

ALPN negotiation is handled by the TLS layer, via OpenSSL, underneath stream contexts or a QUIC-capable extension; it is not something userland code negotiates directly, though stream context options can be used to restrict or inspect the negotiated protocol.

## Documentation
- [https://www.rfc-editor.org/rfc/rfc7301](https://www.rfc-editor.org/rfc/rfc7301)

## See Also
- [PHP speaks QUIC now, and OpenSSL did the hard part](https://dev.to/mikepultz/php-speaks-quic-now-and-openssl-did-the-hard-part-2329)

## Related
- [Transport Layer Security (TLS)](/features/tls.md)
- [QUIC](/features/quic.md)
- [HTTP/3](/features/http-3.md)
- [Hyper Text Transfer Protocol Secure (HTTPS)](/features/https.md)
- [OpenSSL](/features/openssl.md)

