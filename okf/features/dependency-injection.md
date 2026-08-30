---
type: "concept"
title: "Dependency Injection"
description: "Dependency injection, or ``DI``, is a design pattern in which an object receives other objects that it depends on."
resource: "https://en.wikipedia.org/wiki/Dependency_injection"
tags: ["concept", "private", "readonly"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dependency Injection

Dependency injection, or ``DI``, is a design pattern in which an object receives other objects that it depends on. Dependency injection is a design pattern where an object receives its dependencies from external sources rather than creating them internally. This promotes loose coupling, easier testing, and greater flexibility in code maintenance. By injecting dependencies, developers can swap implementations more easily, making systems more modular and adaptable to change.

```php
<?php

    class MyObject {
        function __construct(private readonly Connection $database) {}
        
        function load(int $id): self {
            return $this->connection->select($id);
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Dependency_injection](https://en.wikipedia.org/wiki/Dependency_injection)

## See Also
- [Road to dependency injection](https://matthiasnoback.nl/2018/06/road-to-dependency-injection/)
- [PHP-di](https://php-di.org/)
- [Dependency Injection in PHP: Laravel’s Magic vs. Symfony’s Explicitness](https://lukaszzychal.medium.com/dependency-injection-in-php-laravels-magic-vs-symfony-s-explicitness-ce0170a30403)

## Related
- [Autowiring](/features/autowiring.md)
- [Clock](/features/clock.md)
- [Dependency Injection Container](/features/dependency-injection-container.md)
- [Injection](/features/injection.md)
- [Interoperability](/features/interoperability.md)
- [Dependency Inversion (DIP)](/features/dependency-inversion.md)
- [Greenfield](/features/green-field.md)
- [Magento](/features/magento.md)
- [Ports And Adapters](/features/ports-and-adapters.md)

