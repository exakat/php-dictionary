---
type: "PHP Feature"
title: "Decorator Pattern"
description: "A decorator, or decoration, is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code."
resource: "https://refactoring.guru/design-patterns/decorator/php/example"
tags: ["design pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Decorator Pattern

A decorator, or decoration, is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code. Decorators are often used to extend the functionality of classes or objects by wrapping them in additional classes that provide the desired functionality.

```php
<?php

    interface Coffee {
        function cost();
    }
    
    class SimpleCoffee implements Coffee {
        public function cost() {
            return 5;
        }
    }
    
    class MilkDecorator implements Coffee {
        protected $coffee;
    
        public function __construct(Coffee $coffee) {
            $this->coffee = $coffee;
        }
    
        public function cost() {
            return $this->coffee->cost() + 2;
        }
    }

?>
```

## Documentation
- [https://refactoring.guru/design-patterns/decorator/php/example](https://refactoring.guru/design-patterns/decorator/php/example)

## See Also
- [Decorating Member Objects](https://rekalogika.dev/doctrine-collections-decorator/cookbook/decorating-members)
- [Hands-on decoration](https://muhammedsari.me/hands-on-decoration)
- [Strategy vs Decorator in PHP: Choosing the Right Design Pattern](https://phpconference.com/blog/strategy-vs-decorator-php-design-patterns/)

## Related
- [Design Pattern](/features/design-pattern.md)
- [Design Pattern Wrapper](/features/wrapper-designpattern.md)
- [Proxy Class](/features/proxy-class.md)
- [Interface](/features/interface.md)
- [Aspect-Oriented](/features/aspect-oriented.md)
- [Facade](/features/facade.md)
- [Middleware Pattern](/features/middleware.md)

## Details
- Packagist: [zbateson/stream-decorators](https://packagist.org/packages/zbateson/stream-decorators)

