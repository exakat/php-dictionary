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

Related : [Thin](Thin), [Fat](Fat), [Micro-framework](Micro-framework), [Request](Request), [Middleware Pattern](Middleware Pattern), [Route](Route), [PHP Standards Recommendations (PSR)](PHP Standards Recommendations (PSR))
