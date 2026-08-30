---
type: "concept"
title: "Slim"
description: "Slim is a lightweight PHP micro-framework designed for building APIs and small web applications."
resource: "https://www.slimframework.com/docs/v4/"
tags: ["framework", "concept", "micro-framework"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Slim

Slim is a lightweight PHP micro-framework designed for building APIs and small web applications. It provides routing, middleware support, and PSR-7 request/response handling with minimal overhead.

Slim follows the philosophy of doing less: it ships with no ORM, no templating engine, and no authentication layer. Developers add only the components they need.

In a broader sense, slim is also used informally to describe code or classes that are deliberately minimal and focused on a single task.

```php
<?php

    use Slim\Factory\AppFactory;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    
    $app = AppFactory::create();
    
    $app->get('/hello/{name}', function (Request $request, Response $response, array $args): Response {
        $response->getBody()->write('Hello, ' . $args['name']);
        return $response;
    });
    
    $app->run();

?>
```

## Documentation
- [https://www.slimframework.com/docs/v4/](https://www.slimframework.com/docs/v4/)

## See Also
- [GitHub - slimphp/Slim](https://github.com/slimphp/Slim)

## Related
- [Thin](/features/thin.md)
- [Fat](/features/fat.md)
- [Request](/features/request.md)
- [Middleware Pattern](/features/middleware.md)
- [Route](/features/route.md)
- [PHP Standards Recommendations (PSR)](/features/psr.md)

## Details
- Packagist: [slim/slim](https://packagist.org/packages/slim/slim)

