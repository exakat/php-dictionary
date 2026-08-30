---
type: "acronym"
title: "Transport Layer Security (TLS)"
description: "``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web."
resource: "https://www.php.net/manual/en/context.php"
tags: ["acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Transport Layer Security (TLS)

``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web. TLS is often related to HTTPS, for secured transmission with the HTTP protocol. It used to be based on SSL.

TLS is a PHP context for sockets, and share the configuration options with SSL.

```php
<?php

$context = stream_context_create( ['tls' => ['local_cert'=> $certificate_path], ]);

if ($fp = stream_socket_client('tlsv1.2://'.$host.':'.$port, 
                               $errno, 
                               $errstr, 
                               30, 
                               STREAM_CLIENT_CONNECT, 
                               $context,
                               )) {
    fwrite($fp, "\n");
} else {
   echo "Error: $errno - $errstr\n";
}

?>
```

## Documentation
- [https://www.php.net/manual/en/context.php](https://www.php.net/manual/en/context.php)

## See Also
- [Internet Domain: TCP, UDP, SSL, and TLS](https://www.php.net/manual/en/transports.inet.php)

## Related
- [Secure Sockets Layer (SSL)](/features/ssl.md)
- [QUIC](/features/quic.md)
- [Application-Layer Protocol Negotiation (ALPN)](/features/alpn.md)

