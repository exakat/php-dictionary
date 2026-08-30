---
type: "PHP Feature"
title: "Redirect"
description: "An HTTP redirect instructs the client to navigate to a different URL."
resource: "https://www.php.net/manual/en/function.header.php"
tags: ["http", "web"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Redirect

An HTTP redirect instructs the client to navigate to a different URL. PHP performs redirects by sending a ``Location`` header with an appropriate HTTP status code: 301 for permanent redirect, 302 for temporary, or 303 for 'see other'.

After sending the redirect header, execution should stop immediately with ``exit`` to prevent further output being sent to the client.

```php
<?php

    // Temporary redirect
    header('Location: /new-page');
    exit;
    
    // Permanent redirect
    header('Location: https://example.com/new-page', true, 301);
    exit;

?>
```

## Documentation
- [https://www.php.net/manual/en/function.header.php](https://www.php.net/manual/en/function.header.php)

## See Also
- [HTTP redirects](https://developer.mozilla.org/en-US/docs/Web/HTTP/Redirections)

## Related
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [HTTP Code](/features/http-code.md)
- [HTTP Request Headers](/features/http-headers.md)
- [Response](/features/response.md)
- [Universal Resource Locator (URL)](/features/url.md)
- [Search Engine Optimization (SEO)](/features/seo.md)
- [SplSubject](/features/splsubject.md)

