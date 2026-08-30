---
type: "PHP Feature"
title: "Strategy"
description: "The Strategy design pattern defines a family of interchangeable algorithms, encapsulates each one in its own class, and lets the algorithm vary independently from the code that uses it."
resource: "https://refactoring.guru/design-patterns/strategy/php/example"
tags: ["design pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Strategy

The Strategy design pattern defines a family of interchangeable algorithms, encapsulates each one in its own class, and lets the algorithm vary independently from the code that uses it. The calling code depends only on a common interface, and the concrete strategy is selected and injected at runtime.

Strategy avoids long conditional structures, ``if``/``elseif`` or ``match``, that pick between several algorithms, replacing them with polymorphism. It is closely related to the Decorator pattern, but a strategy replaces behaviour, while a decorator adds to it.

Common PHP use cases include payment processing, sorting or pricing algorithms, and validation rules that vary by context.

```php
<?php

    interface PaymentStrategy {
        public function pay(float $amount): string;
    }
    
    class CreditCardPayment implements PaymentStrategy {
        public function pay(float $amount): string {
            return "Paid {$amount} by credit card";
        }
    }
    
    class PaypalPayment implements PaymentStrategy {
        public function pay(float $amount): string {
            return "Paid {$amount} via PayPal";
        }
    }
    
    class Checkout {
        public function __construct(
            private PaymentStrategy $strategy,
        ) {}
    
        public function process(float $amount): string {
            return $this->strategy->pay($amount);
        }
    }
    
    $checkout = new Checkout(new PaypalPayment());
    echo $checkout->process(42.0);

?>
```

## Documentation
- [https://refactoring.guru/design-patterns/strategy/php/example](https://refactoring.guru/design-patterns/strategy/php/example)

## See Also
- [Strategy pattern - Wikipedia](https://en.wikipedia.org/wiki/Strategy_pattern)
- [DesignPatternsPHP: Strategy](https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Strategy/README.html)
- [Strategy vs Decorator in PHP: Choosing the Right Design Pattern](https://phpconference.com/blog/strategy-vs-decorator-php-design-patterns/)

## Related
- [Design Pattern](/features/design-pattern.md)
- [Decorator Pattern](/features/decorator.md)
- [Interface](/features/interface.md)
- [Command](/features/command.md)
- [Dependency Injection](/features/dependency-injection.md)
- [Match](/features/match.md)

