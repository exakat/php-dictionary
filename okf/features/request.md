---
type: "concept"
title: "Request"
description: "A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files."
resource: "https://www.php-fig.org/psr/psr-7/"
tags: ["concept", "http", "psr"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Request

A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files.

PHP frameworks provide a dedicated Request object that replaces direct access to superglobals such as ``$_GET``, ``$_POST``, ``$_SERVER``, and ``$_FILES``. This makes code more testable and explicit.

PSR-7 defines a standard ``ServerRequestInterface`` that many frameworks and libraries implement, enabling interoperability.

```php
<?php

// PSR-7 style
use Psr\Http\Message\ServerRequestInterface;

function handle(ServerRequestInterface $request): void {
    $method = $request->getMethod();           // 'POST'
    $query  = $request->getQueryParams();      // $_GET equivalent
    $body   = $request->getParsedBody();       // $_POST equivalent
    $header = $request->getHeaderLine('Accept');
}

// Laravel / Symfony style
use Illuminate\Http\Request;

class UserController {
    public function store(Request $request): Response {
        $name  = $request->input('name');
        $email = $request->input('email');
    }
}

?>
```

## Documentation
- [https://www.php-fig.org/psr/psr-7/](https://www.php-fig.org/psr/psr-7/)

## See Also
- [Symfony HttpFoundation Request](https://symfony.com/doc/current/components/http_foundation.html)
- [Laravel Requests](https://laravel.com/docs/12.x/requests)

## Related
- [$_REQUEST](/features/$_request.md)
- [$_GET](/features/$_get.md)
- [$_POST](/features/$_post.md)
- [$_SERVER](/features/$_server.md)
- [Controller](/features/controller.md)
- [Route](/features/route.md)
- [Middleware Pattern](/features/middleware.md)
- [Incoming Data](/features/incoming-data.md)
- [Form](/features/form.md)

## Details
- Packagist: [psr/http-message](https://packagist.org/packages/psr/http-message)
- Packagist: [nyholm/psr7](https://packagist.org/packages/nyholm/psr7)

