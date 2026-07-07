.. _pattern:
.. _design pattern:
.. _software pattern:
.. meta::
	:description:
		Pattern: A pattern is a named, reusable solution to a commonly recurring problem in software design.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pattern
	:twitter:description: Pattern: A pattern is a named, reusable solution to a commonly recurring problem in software design
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pattern
	:og:type: article
	:og:description: A pattern is a named, reusable solution to a commonly recurring problem in software design
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pattern.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:16:36 +0000","dateModified":"Tue, 07 Jul 2026 08:16:36 +0000","description":"A pattern is a named, reusable solution to a commonly recurring problem in software design","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pattern
-------

A pattern is a named, reusable solution to a commonly recurring problem in software design. Patterns are not finished code; they are templates that describe a proven structure, the problem it solves, and the trade-offs involved in applying it.

The concept was popularised in software by the Gang of Four, Gamma, Helm, Johnson, Vlissides, in their 1994 book Design Patterns: Elements of Reusable Object-Oriented Software, which catalogued 23 patterns grouped into three categories:

+ Creational patterns manage object creation: singleton, factory method, abstract factory, builder, prototype
+ Structural patterns organise classes and objects: adapter, bridge, composite, decorator, facade, flyweight, proxy
+ Behavioural patterns define communication between objects: chain of responsibility, command, iterator, mediator, memento, observer, state, strategy, template method, visitor

PHP supports all classical OOP patterns through its class system. Many patterns are also embedded in popular frameworks: Laravel uses Facade, Repository, and Observer; Symfony uses Decorator, Event Dispatcher (Observer), and Dependency Injection (Constructor Injection).

Patterns have a broader scope beyond OOP: architectural patterns (MVC, CQRS, Event Sourcing), concurrency patterns, and enterprise integration patterns all describe recurring solutions at different levels of abstraction.

A pattern applied in the wrong context becomes an anti-pattern.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Software_design_pattern>`__

See also `Software design pattern — Wikipedia <https://en.wikipedia.org/wiki/Software_design_pattern>`_ and `Design Pattenrs (the book) <https://en.wikipedia.org/wiki/Design_Patterns>`_.

Related : :ref:`Anti-Pattern <anti-pattern>`, :ref:`Pattern Matching <pattern-matching>`, :ref:`Pattern-Based Analysis <pattern-based-analysis>`, :ref:`Polymorphism <polymorphism>`, :ref:`Interface <interface>`, :ref:`Specification <specification>`, :ref:`Best Practices <best-practice>`, :ref:`Look-up <look-up>`, :ref:`Null Pattern <nullpattern>`, :ref:`Write Everything Twice (WET) <wet>`, :ref:`Yoda Condition <yoda>`
