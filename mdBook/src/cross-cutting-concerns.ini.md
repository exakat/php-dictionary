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

## See Also

+ [Modeling Cross Cutting Concerns](https://docs.typo3.org/m/typo3/reference-coreapi/6.2/en-us/CodingGuidelines/PhpArchitecture/ModelingCrossCuttingConcerns/Index.html)

Related : [Aspect-Oriented](Aspect-Oriented), [Middleware Pattern](Middleware Pattern), [Decorator Pattern](Decorator Pattern), [Separation Of Concerns](Separation Of Concerns), [Layered Architecture](Layered Architecture), [Log File](Log File)
