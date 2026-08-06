# Slim
Slim is a lightweight PHP micro-framework designed for building APIs and small web applications. It provides routing, middleware support, and PSR-7 request/response handling with minimal overhead.

Slim follows the philosophy of doing less: it ships with no ORM, no templating engine, and no authentication layer. Developers add only the components they need.

In a broader sense, slim is also used informally to describe code or classes that are deliberately minimal and focused on a single task.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/slim.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/slim.html","name":"Slim","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 18:58:02 +0000","dateModified":"Mon, 06 Jul 2026 18:58:02 +0000","description":"Slim is a lightweight PHP micro-framework designed for building APIs and small web applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Slim.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.slimframework.com/docs/v4/)**
## Related

+ [Thin](thin.ini.html)
+ [Fat](fat.ini.html)
+ [Micro-framework](micro-framework.ini.html)
+ [Request](request.ini.html)
+ [Middleware Pattern](middleware.ini.html)
+ [Route](route.ini.html)
+ [PHP Standards Recommendations (PSR)](psr.ini.html)

## Related packages

+ [slim/slim](https://packagist.org/packages/slim/slim)
