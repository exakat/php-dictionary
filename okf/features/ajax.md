---
type: "concept"
title: "AJAX"
description: "AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload."
resource: "https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX"
tags: ["web", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# AJAX

AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload. Despite the name, modern AJAX often uses JSON rather than XML for data exchange.

AJAX requests are handled like any other HTTP request by PHP. The PHP application receives the request, processes it, and returns a response, most often JSON, which the client-side JavaScript then uses to update the page dynamically.

AJAX is fundamental to single-page applications and dynamic web interfaces.

```php
<?php

    // Server-side PHP endpoint handling an AJAX request
    header('Content-Type: application/json');
    
    $data = json_decode(file_get_contents('php://input'), true);
    $name = htmlspecialchars($data['name'] ?? 'World');
    
    echo json_encode(['message' => "Hello, $name!"]);

?>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX)

## See Also
- [AJAX - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX/Getting_Started)

## Related
- [Extensible Markup Language (XML)](/features/xml.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Javascript](/features/javascript.md)
- [Single Page Application (SPA)](/features/spa.md)
- [REST API](/features/rest-api.md)
- [Real Time](/features/real-time.md)

