---
type: "PHP Feature"
title: "Factory"
description: "A factory is a design pattern used to create objects without exposing the instantiation logic, i.e., the new keyword, to the client code."
resource: "https://refactoring.guru/design-patterns/factory-method/php/example"
tags: ["design pattern", "code architecture pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Factory

A factory is a design pattern used to create objects without exposing the instantiation logic, i.e., the new keyword, to the client code. Instead of the client knowing exactly which class to instantiate, it asks the factory to produce the object for it.

```php
<?php

// LoggerFactory.php
class LoggerFactory
{
    // Logger is an interface
    public static function createLogger(string $type): Logger
    {
        switch (strtolower($type)) {
            case 'file':
                return new FileLogger();
            case 'database':
            case 'db':
                return new DatabaseLogger();
            default:
                throw new InvalidArgumentException("Unknown logger type:" . $type);
        }
    }
}

?>
```

## Documentation
- [https://refactoring.guru/design-patterns/factory-method/php/example](https://refactoring.guru/design-patterns/factory-method/php/example)

## See Also
- [Exploring the Factory Pattern in PHP 8.2](https://medium.com/@bluznierca1/exploring-the-factory-pattern-in-php-8-2-d75f2de6f22e)
- [PHP Tips | Exploring the Factory Pattern 🤖](https://dev.to/razielrodrigues/php-creational-patterns-factory-429c)

## Related
- [Abstract Factory](/features/abstract-factory.md)

