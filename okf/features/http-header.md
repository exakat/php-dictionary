---
type: "PHP Feature"
title: "HTTP Headers"
description: "HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction."
resource: "https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers"
tags: ["web", "header", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# HTTP Headers

HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction. 

They are separated from the content, which usually represents the HTML page, or the binary  code of the image, archive. 

HTTP headers have a name, and a value. They are made of ASCII text, and separated by a colon ``:``

HTTP headers are the same with HTTPS.

HTTP headers are handled by the following functions: ``headers_sent()``, ``headers_list()``, ``header()``, ``header_remove()``, ``header_register_callback()``.

```php
<?php

    function foo($a, $b) {
        return $a - $b;
    }

?>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers)

## See Also
- [RFC 4229 : HTTP Header Field Registrations](https://datatracker.ietf.org/doc/html/rfc4229)
- [HTTP headers list](https://en.wikipedia.org/wiki/List_of_HTTP_header_fields)
- [PHP - simple way to send HTTP headers before a script ends](https://shkspr.mobi/blog/2026/05/php-simple-way-to-send-http-headers-before-a-script-ends/)

## Related
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Hyper Text Transfer Protocol Secure (HTTPS)](/features/https.md)
- [PHP Handlers](/features/handler.md)
- [Headers](/features/headers.md)
- [HTTP Request Headers](/features/http-headers.md)
- [HTTP Method](/features/http-method.md)
- [Payload](/features/payload.md)
- [Replay](/features/replay.md)
- [Time To Live (TTL)](/features/ttl.md)
- [Webhook](/features/webhook.md)

