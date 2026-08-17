# Slim
Slim is a lightweight PHP micro-framework designed for building APIs and small web applications. It provides routing, middleware support, and PSR-7 request/response handling with minimal overhead.

Slim follows the philosophy of doing less: it ships with no ORM, no templating engine, and no authentication layer. Developers add only the components they need.

In a broader sense, slim is also used informally to describe code or classes that are deliberately minimal and focused on a single task.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slim.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slim.html","name":"Slim","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Slim is a lightweight PHP micro-framework designed for building APIs and small web applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Slim.html"]}],"alternateName":["slim-framework","slim-php"],"keywords":["framework","concept","micro-framework"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-framework.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/route.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psr.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.slimframework.com\/docs\/v4\/"},{"@type":"CreativeWork","name":"GitHub - slimphp\/Slim","url":"https:\/\/github.com\/slimphp\/Slim"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"slim"}]}]}</script>
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
## See Also

+ [GitHub - slimphp/Slim](https://github.com/slimphp/Slim)

## Related

+ [Thin](thin.html)
+ [Fat](fat.html)
+ [Micro-framework](micro-framework.html)
+ [Request](request.html)
+ [Middleware Pattern](middleware.html)
+ [Route](route.html)
+ [PHP Standards Recommendations (PSR)](psr.html)

## Related packages

+ [slim/slim](https://packagist.org/packages/slim/slim)
