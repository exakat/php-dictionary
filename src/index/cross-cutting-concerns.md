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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cross-cutting-concerns.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cross-cutting-concerns.html","name":"Cross-cutting Concerns","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:04:07 +0000","dateModified":"Tue, 07 Jul 2026 05:04:07 +0000","description":"Cross-cutting concerns are aspects of a system that affect multiple layers or components but cannot be cleanly encapsulated in any single module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cross-cutting Concerns.html"]}],"alternateName":["crosscutting-concerns"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aspect-oriented.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separation-of-concerns.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/layered-architecture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logging.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cross-cutting_concern"},{"@type":"CreativeWork","name":"Modeling Cross Cutting Concerns","url":"https:\/\/docs.typo3.org\/m\/typo3\/reference-coreapi\/6.2\/en-us\/CodingGuidelines\/PhpArchitecture\/ModelingCrossCuttingConcerns\/Index.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cross-cutting-concerns"}]}]}</script>
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

+ [Aspect-Oriented](aspect-oriented.html)
+ [Middleware Pattern](middleware.html)
+ [Decorator Pattern](decorator.html)
+ [Separation Of Concerns](separation-of-concerns.html)
+ [Layered Architecture](layered-architecture.html)
+ [Log File](logging.html)
