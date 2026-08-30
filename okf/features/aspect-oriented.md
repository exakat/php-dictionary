---
type: "PHP Feature"
title: "Aspect-Oriented"
description: "Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects."
resource: "https://en.wikipedia.org/wiki/Aspect-oriented_programming"
tags: ["paradigm"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Aspect-Oriented

Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects.

In applications, common cross-cutting concerns include logging, caching, authorization, validation, and transaction management. They are typically implemented through decorators, middleware chains, event listeners, or AOP frameworks.

The key principle is that business logic classes should remain unaware of these concerns: they are woven in by the surrounding infrastructure rather than being called explicitly. This improves cohesion, reduces duplication, and makes each concern independently testable and replaceable.

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

## Documentation
- [https://en.wikipedia.org/wiki/Aspect-oriented_programming](https://en.wikipedia.org/wiki/Aspect-oriented_programming)

## See Also
- [Go! AOP Framework for PHP](https://github.com/goaop/framework)

## Related
- [Aspect Oriented Programming](/features/aspect-programming.md)
- [Decorator Pattern](/features/decorator.md)
- [Middleware Pattern](/features/middleware.md)
- [Proxy](/features/proxy.md)
- [Paradigm](/features/paradigm.md)
- [Separation Of Concerns](/features/separation-of-concerns.md)
- [Decoupling](/features/decoupling.md)

## Details
- Packagist: [goaop/framework](https://packagist.org/packages/goaop/framework)

