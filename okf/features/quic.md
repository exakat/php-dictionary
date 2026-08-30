---
type: "acronym"
title: "QUIC"
description: "``QUIC`` is a transport protocol that runs over UDP instead of TCP."
resource: "https://www.rfc-editor.org/rfc/rfc9000"
tags: ["acronym", "protocol"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# QUIC

``QUIC`` is a transport protocol that runs over UDP instead of TCP. It was originally designed at Google and later standardized by the IETF; it is the transport that powers HTTP/3.

QUIC bundles together several things that used to be separate layers: it multiplexes multiple independent streams over a single connection, so a lost packet on one stream no longer blocks the others, unlike HTTP/2 over TCP, which suffers from head-of-line blocking. It also folds the TLS 1.3 handshake into the connection setup, supports 0-RTT resumption for returning clients, and allows a connection to survive the client changing IP address or network, aka connection migration, since connections are identified by a connection ID rather than by the traditional IP/port tuple.

Because QUIC re-implements reliability, congestion control, and loss recovery in userspace instead of relying on the kernel's TCP stack, most implementations, like ``ngtcp2`` or ``quiche``, are separate libraries rather than an OS-level socket type. PHP does not support QUIC natively; support requires a dedicated extension, typically built with FFI or a C extension binding to one of those libraries, and depends on OpenSSL 3.5+ for the QUIC-aware TLS APIs.

## Documentation
- [https://www.rfc-editor.org/rfc/rfc9000](https://www.rfc-editor.org/rfc/rfc9000)

## See Also
- [PHP speaks QUIC now, and OpenSSL did the hard part](https://dev.to/mikepultz/php-speaks-quic-now-and-openssl-did-the-hard-part-2329)

## Related
- [User Datagram Protocol (UDP)](/features/udp.md)
- [Transport Layer Security (TLS)](/features/tls.md)
- [HTTP/3](/features/http-3.md)
- [Application-Layer Protocol Negotiation (ALPN)](/features/alpn.md)
- [OpenSSL](/features/openssl.md)
- [Foreign Function Interface (FFI)](/features/ffi.md)
- [PHP Extensions](/features/php-extension.md)

