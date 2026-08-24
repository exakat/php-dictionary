# Aspect-Oriented
Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects.

In applications, common cross-cutting concerns include logging, caching, authorization, validation, and transaction management. They are typically implemented through decorators, middleware chains, event listeners, or AOP frameworks.

The key principle is that business logic classes should remain unaware of these concerns: they are woven in by the surrounding infrastructure rather than being called explicitly. This improves cohesion, reduces duplication, and makes each concern independently testable and replaceable.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aspect-oriented.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aspect-oriented.html","name":"Aspect-Oriented","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aspect-oriented.html"]}],"alternateName":["aop"],"keywords":["paradigm"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aspect-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/paradigm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separation-of-concerns.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decoupling.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Aspect-oriented_programming"},{"@type":"CreativeWork","name":"Go! AOP Framework for PHP","url":"https:\/\/github.com\/goaop\/framework"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"aspect-oriented"}]}]}</script>
```php
<?php

// Cross-cutting concern isolated as a decorator
final class LoggingRepository implements UserRepositoryInterface {
    public function __construct(
        private readonly UserRepositoryInterface $inner,
        private readonly LoggerInterface         $logger,
    ) {}

    public function find(int $id): User {
        $this->logger->info('find', ['id' => $id]);
        return $this->inner->find($id);
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Aspect-oriented_programming)**
## See Also

+ [Go! AOP Framework for PHP](https://github.com/goaop/framework)

## Related

+ [Aspect Oriented Programming](aspect-programming.html)
+ [Decorator Pattern](decorator.html)
+ [Middleware Pattern](middleware.html)
+ [Proxy](proxy.html)
+ [Paradigm](paradigm.html)
+ [Separation Of Concerns](separation-of-concerns.html)
+ [Decoupling](decoupling.html)

## Related packages

+ [goaop/framework](https://packagist.org/packages/goaop/framework)
