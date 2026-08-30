---
type: "concept"
title: "HTTP Method"
description: "An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request."
resource: "https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods"
tags: ["web", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# HTTP Method

An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request. The most common methods are GET, POST, PUT, PATCH, DELETE, HEAD, and OPTIONS.

Methods differ in their safety and idempotency guarantees. A method is safe if it does not modify server state, such as ``GET``, ``HEAD``, ``OPTIONS``. A method is idempotent if repeating it produces the same result as a single call ``GET``, ``HEAD``, ``PUT``, ``DELETE``. ``POST`` and ``PATCH`` are neither safe nor guaranteed idempotent by the specification, which is why APIs that use them for state-changing operations often implement explicit idempotency mechanisms such as idempotency keys.

The request method is available via ``$_SERVER['REQUEST_METHOD']`` or through framework helpers.

```php
<?php

    $method = $_SERVER['REQUEST_METHOD']; // GET, POST, PUT, PATCH, DELETE ...

?>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods)

## See Also
- [RFC 9110 — HTTP Semantics](https://www.rfc-editor.org/rfc/rfc9110#name-methods)

## Related
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [REST API](/features/rest-api.md)
- [Idempotent](/features/idempotent.md)
- [HTTP Headers](/features/http-header.md)
- [Request](/features/request.md)
- [Response](/features/response.md)

