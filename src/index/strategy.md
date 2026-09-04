# Strategy
The Strategy design pattern defines a family of interchangeable algorithms, encapsulates each one in its own class, and lets the algorithm vary independently from the code that uses it. The calling code depends only on a common interface, and the concrete strategy is selected and injected at runtime.

Strategy avoids long conditional structures, ``if``/``elseif`` or ``match``, that pick between several algorithms, replacing them with polymorphism. It is closely related to the Decorator pattern, but a strategy replaces behaviour, while a decorator adds to it.

Common PHP use cases include payment processing, sorting or pricing algorithms, and validation rules that vary by context.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strategy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strategy.html","name":"Strategy","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 07:35:05 +0000","dateModified":"Sun, 30 Aug 2026 07:35:05 +0000","description":"The Strategy design pattern defines a family of interchangeable algorithms, encapsulates each one in its own class, and lets the algorithm vary independently from the code that uses it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strategy.html"]}],"alternateName":["strategy-pattern"],"keywords":["design pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/refactoring.guru\/design-patterns\/strategy\/php\/example"},{"@type":"CreativeWork","name":"Strategy pattern - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Strategy_pattern"},{"@type":"CreativeWork","name":"DesignPatternsPHP: Strategy","url":"https:\/\/designpatternsphp.readthedocs.io\/en\/latest\/Behavioral\/Strategy\/README.html"},{"@type":"CreativeWork","name":"Strategy vs Decorator in PHP: Choosing the Right Design Pattern","url":"https:\/\/phpconference.com\/blog\/strategy-vs-decorator-php-design-patterns\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strategy"}]}]}</script>
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

**[Documentation](https://refactoring.guru/design-patterns/strategy/php/example)**
## See Also

+ [Strategy pattern - Wikipedia](https://en.wikipedia.org/wiki/Strategy_pattern)
+ [DesignPatternsPHP: Strategy](https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Strategy/README.html)
+ [Strategy vs Decorator in PHP: Choosing the Right Design Pattern](https://phpconference.com/blog/strategy-vs-decorator-php-design-patterns/)

## Related

+ [Design Pattern](design-pattern.html)
+ [Decorator Pattern](decorator.html)
+ [Interface](interface.html)
+ [Command](command.html)
+ [Dependency Injection](dependency-injection.html)
+ [Match](match.html)
