# Cohesion
Cohesion measures how closely related and focused the responsibilities of a single module, class, or function are. High cohesion means that a unit has a single, well-defined purpose and all its parts work toward that purpose. Low cohesion means it handles many unrelated concerns.

High cohesion is a desirable property: it makes code easier to understand, test, maintain, and reuse. It is the ``C`` in the SOLID principle of Single Responsibility, or SRP, and is the counterpart of low coupling.

``Robert C. Martin``'s common forms of cohesion, from weakest to strongest:

+ Coincidental: parts are grouped arbitrarily, worst case
+ Logical: parts perform similar operations, e.g., a utility class
+ Temporal: parts are executed at the same time
+ Procedural: parts follow a sequence of steps
+ Communicational: parts operate on the same data
+ Sequential: output of one part is input to the next
+ Functional: all parts contribute to a single well-defined task, best case

Architectes aim for high cohesion and low coupling.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cohesion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cohesion.html","name":"Cohesion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Cohesion measures how closely related and focused the responsibilities of a single module, class, or function are","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cohesion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// Low cohesion: the class does too many unrelated things
class Utilities {
    public function sendEmail(string $to, string $body): void { /* ... */ }
    public function calculateTax(float $price): float { return $price * 0.2; }
    public function parseDate(string $date): DateTime { return new DateTime($date); }
}

// High cohesion: each class has one focused responsibility
class Mailer {
    public function send(string $to, string $body): void { /* ... */ }
}

class TaxCalculator {
    public function calculate(float $price): float { return $price * 0.2; }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cohesion_(computer_science))**
## See Also

+ [PHP and Microservices: Balancing Cohesion and Coupling](https://php-include.com/php-and-microservices-balancing-cohesion-and-coupling/)

## Related

+ [Coupling](coupling.ini.html)
+ [Decoupling](decoupling.ini.html)
+ [Single Responsability Principle (SRP)](srp.ini.html)
+ [SOLID](solid.ini.html)
+ [Separation Of Concerns](separation-of-concerns.ini.html)
+ [God Object](god-object.ini.html)
+ [Tech Silo](tech-silo.ini.html)
