---
type: "PHP Feature"
title: "HTTP Request Headers"
description: "HTTP request headers are sent by the client to the server at the start of an HTTP request."
resource: "https://www.php.net/manual/en/function.getallheaders.php"
tags: ["web", "network"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# HTTP Request Headers

HTTP request headers are sent by the client to the server at the start of an HTTP request. They carry metadata about the client, the requested resource, and the desired response format.

Request headers are available in the ``$_SERVER`` superglobal with the ``HTTP_`` prefix, e.g., ``$_SERVER['HTTP_ACCEPT']``, or through ``getallheaders()`` for the full list.

Common request headers include ``Accept``, ``Authorization``, ``Content-Type``, ``User-Agent``, and ``Cookie``.

```php
<?php

// Read a specific request header
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

// Read all request headers
$requestHeaders = getallheaders();

foreach ($requestHeaders as $name => $value) {
    echo "$name: $value", PHP_EOL;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/function.getallheaders.php](https://www.php.net/manual/en/function.getallheaders.php)

## See Also
- [Request header](https://developer.mozilla.org/en-US/docs/Glossary/Request_header)

## Related
- [HTTP Headers](/features/http-header.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Headers](/features/headers.md)
- [$_SERVER](/features/$_server.md)
- [HTTP Code](/features/http-code.md)
- [Redirect](/features/redirect.md)
- [Search Engine Optimization (SEO)](/features/seo.md)

