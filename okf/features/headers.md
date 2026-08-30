---
type: "PHP Feature"
title: "Headers"
description: "Headers are HTTP response data sent to the client before any body output."
resource: "https://www.php.net/manual/en/function.header.php"
tags: ["web", "native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Headers

Headers are HTTP response data sent to the client before any body output. PHP provides several built-in functions to manage them.

The native function ``header()`` sends a raw HTTP header. ``headers_sent()`` checks whether headers have already been sent. ``headers_list()`` returns the list of headers ready to be sent. ``header_remove()`` removes a previously set header.

Headers must be sent before any output, HTML, whitespace, or ``echo``. Sending output before calling ``header()`` triggers a PHP warning.

```php
<?php

header('Content-Type: application/json');
header('X-Custom-Header: value');

if (headers_sent($file, $line)) {
    echo "Headers already sent in $file on line $line";
}

echo json_encode(['status' => 'ok']);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.header.php](https://www.php.net/manual/en/function.header.php)

## See Also
- [Response header](https://developer.mozilla.org/en-US/docs/Glossary/Response_header)

## Related
- [HTTP Headers](/features/http-header.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Cookie](/features/cookie.md)
- [HTTP Request Headers](/features/http-headers.md)
- [Output Buffering](/features/output-buffering.md)

