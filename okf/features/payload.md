---
type: "concept"
title: "Payload"
description: "A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata."
resource: "https://en.wikipedia.org/wiki/Payload_(computing)"
tags: ["concept", "web"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Payload

A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata. In an HTTP context, the payload is the body of the message: a JSON object, an XML document, form data, or a binary stream.

The term is also used outside HTTP: a queue message has a payload, a JWT has a payload, and a webhook notification carries a payload describing the event.

The request payload is typically read from ``php://input`` for raw bodies, or accessed through framework helpers that parse and validate it.

```php
<?php

    $payload = json_decode(file_get_contents('php://input'), true);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Payload_(computing)](https://en.wikipedia.org/wiki/Payload_(computing))

## See Also
- [What Is a Request Payload?](https://www.abstractapi.com/guides/api-glossary/request-payload)
- [Payload header | MDN Glossary](https://developer.mozilla.org/en-US/docs/Glossary/Payload_header)
- [Modelina](https://modelina.org/)

## Related
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [HTTP Headers](/features/http-header.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Webhook](/features/webhook.md)
- [JSON Web Token (JWT)](/features/jwt.md)
- [Response](/features/response.md)
- [php://input](/features/php-input.md)
- [Request](/features/request.md)

