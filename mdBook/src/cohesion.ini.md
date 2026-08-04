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

## See Also

+ [PHP and Microservices: Balancing Cohesion and Coupling](https://php-include.com/php-and-microservices-balancing-cohesion-and-coupling/)

Related : [Coupling](Coupling), [Decoupling](Decoupling), [Single Responsability Principle (SRP)](Single Responsability Principle (SRP)), [SOLID](SOLID), [Separation Of Concerns](Separation Of Concerns), [God Object](God Object), [Tech Silo](Tech Silo)
