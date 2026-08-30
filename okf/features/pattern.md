---
type: "concept"
title: "Pattern"
description: "A pattern is a named, reusable solution to a commonly recurring problem in software design."
resource: "https://en.wikipedia.org/wiki/Software_design_pattern"
tags: ["concept", "quality", "oop"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pattern

A pattern is a named, reusable solution to a commonly recurring problem in software design. Patterns are not finished code; they are templates that describe a proven structure, the problem it solves, and the trade-offs involved in applying it.

The concept was popularised in software by the Gang of Four, Gamma, Helm, Johnson, Vlissides, in their 1994 book ``Design Patterns: Elements of Reusable Object-Oriented Software``, which catalogued 23 patterns grouped into three categories:

+ Creational patterns manage object creation: singleton, factory method, abstract factory, builder, prototype
+ Structural patterns organise classes and objects: adapter, bridge, composite, decorator, facade, flyweight, proxy
+ Behavioural patterns define communication between objects: chain of responsibility, command, iterator, mediator, memento, observer, state, strategy, template method, visitor

PHP supports all classical OOP patterns through its class system. Many patterns are also embedded in popular frameworks. For example, Laravel uses Facade, Repository, and Observer, Symfony uses Decorator, Event Dispatcher, and Dependency Injection.

Patterns have a broader scope beyond OOP: architectural patterns such as MVC, CQRS, Event Sourcing, etc, concurrency patterns, and enterprise integration patterns all describe recurring solutions at different levels of abstraction.

A pattern applied in the wrong context becomes an anti-pattern.

```php
<?php

    // Strategy pattern: swap algorithms at runtime behind a common interface
    interface SortStrategy {
        public function sort(array $data): array;
    }
    
    class BubbleSort implements SortStrategy {
        public function sort(array $data): array {
            // bubble sort implementation
            return $data;
        }
    }
    
    class QuickSort implements SortStrategy {
        public function sort(array $data): array {
            // quicksort implementation
            return $data;
        }
    }
    
    class Sorter {
        public function __construct(private SortStrategy $strategy) {}
    
        public function sort(array $data): array {
            return $this->strategy->sort($data);
        }
    }
    
    $sorter = new Sorter(new QuickSort());
    $sorted = $sorter->sort([3, 1, 4, 1, 5]);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Software_design_pattern](https://en.wikipedia.org/wiki/Software_design_pattern)

## See Also
- [Gang of 4 Design Patterns Explained](https://www.digitalocean.com/community/tutorials/gangs-of-four-gof-design-patterns)
- [Gang of Four (GOF) Design Patterns - GeeksforGeeks](https://www.geeksforgeeks.org/system-design/gang-of-four-gof-design-patterns/)

## Related
- [Anti-Pattern](/features/anti-pattern.md)
- [Pattern Matching](/features/pattern-matching.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)
- [Polymorphism](/features/polymorphism.md)
- [Interface](/features/interface.md)
- [Specification](/features/specification.md)
- [Best Practices](/features/best-practice.md)
- [Look-up](/features/look-up.md)
- [Null Pattern](/features/nullpattern.md)
- [Write Everything Twice (WET)](/features/wet.md)
- [Yoda Condition](/features/yoda.md)

