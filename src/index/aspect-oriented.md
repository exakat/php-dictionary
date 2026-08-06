# Aspect-Oriented
Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects.

In applications, common cross-cutting concerns include logging, caching, authorization, validation, and transaction management. They are typically implemented through decorators, middleware chains, event listeners, or AOP frameworks.

The key principle is that business logic classes should remain unaware of these concerns: they are woven in by the surrounding infrastructure rather than being called explicitly. This improves cohesion, reduces duplication, and makes each concern independently testable and replaceable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/aspect-oriented.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/aspect-oriented.html","name":"Aspect-Oriented","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Aspect-Oriented.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Aspect Oriented Programming](aspect-programming.ini.html)
+ [Decorator Pattern](decorator.ini.html)
+ [Middleware Pattern](middleware.ini.html)
+ [Proxy](proxy.ini.html)
+ [Paradigm](paradigm.ini.html)
+ [Separation Of Concerns](separation-of-concerns.ini.html)
+ [Decoupling](decoupling.ini.html)

## Related packages

+ [goaop/framework](https://packagist.org/packages/goaop/framework)
