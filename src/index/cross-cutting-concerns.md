# Cross-cutting Concerns
Cross-cutting concerns are aspects of a system that affect multiple layers or components but cannot be cleanly encapsulated in any single module. They cut across the boundaries of the architecture rather than living within one well-defined layer.

Common examples: logging, authentication and authorisation, caching, transaction management, error handling, input validation, and metrics collection.

The problem is that naively implementing a cross-cutting concern leads to code duplication: the same logging or auth check is copy-pasted into dozens of classes. When the requirement changes, every copy must be updated.

Possible solutions:

- Middleware, PSR-15: ``HTTP`` pipeline stages that wrap every request/response
- Event listeners / hooks: framework events dispatched at lifecycle points
- Decorators: wrap a service class to add behaviour without modifying it
- PHP Attributes + compile-time code generation, such as AOP with Spiral Framework
- Aspect-Oriented Programming, AOP: intercepts method calls to inject cross-cutting logic.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cross-cutting-concerns.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cross-cutting-concerns.html","name":"Cross-cutting Concerns","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:04:07 +0000","dateModified":"Tue, 07 Jul 2026 05:04:07 +0000","description":"Cross-cutting concerns are aspects of a system that affect multiple layers or components but cannot be cleanly encapsulated in any single module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cross-cutting Concerns.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// Middleware: authentication as a cross-cutting concern
class AuthMiddleware implements MiddlewareInterface {
    public function process(ServerRequestInterface $req, RequestHandlerInterface $next): ResponseInterface {
        $token = $req->getHeaderLine('Authorization');
        if (!$this->auth->validate($token)) {
            return new Response(401);
        }
        return $next->handle($req); // all subsequent handlers see an authenticated request
    }
}

// Decorator: caching as a cross-cutting concern
class CachedOrderRepository implements OrderRepository {
    public function __construct(
        private OrderRepository $inner,
        private CacheInterface  $cache,
    ) {}

    public function findById(int $id): ?Order {
        return $this->cache->get(order:$id, fn() => $this->inner->findById($id));
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cross-cutting_concern)**
## See Also

+ [Modeling Cross Cutting Concerns](https://docs.typo3.org/m/typo3/reference-coreapi/6.2/en-us/CodingGuidelines/PhpArchitecture/ModelingCrossCuttingConcerns/Index.html)

## Related

+ [Aspect-Oriented](aspect-oriented.ini.html)
+ [Middleware Pattern](middleware.ini.html)
+ [Decorator Pattern](decorator.ini.html)
+ [Separation Of Concerns](separation-of-concerns.ini.html)
+ [Layered Architecture](layered-architecture.ini.html)
+ [Log File](logging.ini.html)
