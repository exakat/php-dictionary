# Pattern
A pattern is a named, reusable solution to a commonly recurring problem in software design. Patterns are not finished code; they are templates that describe a proven structure, the problem it solves, and the trade-offs involved in applying it.

The concept was popularised in software by the Gang of Four, Gamma, Helm, Johnson, Vlissides, in their 1994 book ``Design Patterns: Elements of Reusable Object-Oriented Software``, which catalogued 23 patterns grouped into three categories:

+ Creational patterns manage object creation: singleton, factory method, abstract factory, builder, prototype
+ Structural patterns organise classes and objects: adapter, bridge, composite, decorator, facade, flyweight, proxy
+ Behavioural patterns define communication between objects: chain of responsibility, command, iterator, mediator, memento, observer, state, strategy, template method, visitor

PHP supports all classical OOP patterns through its class system. Many patterns are also embedded in popular frameworks. For example, Laravel uses Facade, Repository, and Observer, Symfony uses Decorator, Event Dispatcher, and Dependency Injection.

Patterns have a broader scope beyond OOP: architectural patterns such as MVC, CQRS, Event Sourcing, etc, concurrency patterns, and enterprise integration patterns all describe recurring solutions at different levels of abstraction.

A pattern applied in the wrong context becomes an anti-pattern.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern.html","name":"Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:49:17 +0000","dateModified":"Wed, 15 Jul 2026 13:49:17 +0000","description":"A pattern is a named, reusable solution to a commonly recurring problem in software design","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pattern.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pattern"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Software_design_pattern)**
## Related

+ [Anti-Pattern](anti-pattern.html)
+ [Pattern Matching](pattern-matching.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
+ [Polymorphism](polymorphism.html)
+ [Interface](interface.html)
+ [Specification](specification.html)
+ [Best Practices](best-practice.html)
+ [Look-up](look-up.html)
+ [Null Pattern](nullpattern.html)
+ [Write Everything Twice (WET)](wet.html)
+ [Yoda Condition](yoda.html)
