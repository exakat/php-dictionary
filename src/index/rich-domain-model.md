# Rich Domain Model
A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state. Business rules, invariants, and domain logic live inside the objects themselves, not in external service classes.

A rich domain model is the alternative to the anemic domain model. Rather than exposing raw setters and relying on service classes to enforce rules, a rich entity exposes meaningful, intention-revealing methods that internally validate state transitions and enforce invariants.

Rich domain models align with the principles of Domain-Driven Design: the domain layer is the most important part of the codebase, the language of the code mirrors the language of the domain experts, and the objects protect themselves from invalid state.

Building a rich domain model means: using private properties with no public setters, returning new instances or recording domain events from methods, and throwing domain exceptions when a requested transition is invalid. Value objects are immutable and validated at construction.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rich-domain-model.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rich-domain-model.html","name":"Rich Domain Model","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:33:57 +0000","dateModified":"Fri, 10 Jul 2026 09:33:57 +0000","description":"A rich domain model is one where domain objects, entities, aggregates, value objects, encapsulate both state and the business behaviour that depends on that state","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rich-domain-model.html"]}],"alternateName":["rich-model","behavioural-domain-model"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anemic-domain-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ddd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domain.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oop.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/martinfowler.com\/bliki\/AnemicDomainModel.html"},{"@type":"CreativeWork","name":"Anemic Domain Model vs Rich Domain Model with Examples","url":"https:\/\/thevaluable.dev\/anemic-domain-model\/"},{"@type":"CreativeWork","name":"Rich vs Anemic Entities in PHP with Doctrine: How to Structure Your Business Logic Right","url":"https:\/\/dev.to\/mykola_vantukh\/rich-vs-anemic-entities-in-php-how-to-structure-your-business-logic-right-7a0"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rich-domain-model"}]}]}</script>
```php
<?php

    // Rich domain entity: Order enforces its own lifecycle
    final class Order {
        private OrderStatus $status;
        private Money       $total;
        private array       $events = [];
    
        private function __construct(OrderStatus $status, Money $total) {
            $this->status = $status;
            $this->total  = $total;
        }
    
        public static function place(CustomerId $customer, array $items): self {
            if (empty($items)) {
                throw new \DomainException('An order must have at least one item.');
            }
            $total = Money::sum(array_map(fn($i) => $i->price, $items));
            $order = new self(OrderStatus::Pending, $total);
            $order->events[] = new OrderPlaced($customer, $total);
            return $order;
        }
    
        public function pay(Payment $payment): void {
            if (!$this->status->isPending()) {
                throw new \DomainException('Only pending orders can be paid.');
            }
            if (!$payment->covers($this->total)) {
                throw new \DomainException('Payment is insufficient.');
            }
            $this->status   = OrderStatus::Paid;
            $this->events[] = new OrderPaid($payment->id);
        }
    
        public function releaseEvents(): array {
            $events       = $this->events;
            $this->events = [];
            return $events;
        }
    }

?>
```

**[Documentation](https://martinfowler.com/bliki/AnemicDomainModel.html)**
## See Also

+ [Anemic Domain Model vs Rich Domain Model with Examples](https://thevaluable.dev/anemic-domain-model/)
+ [Rich vs Anemic Entities in PHP with Doctrine: How to Structure Your Business Logic Right](https://dev.to/mykola_vantukh/rich-vs-anemic-entities-in-php-how-to-structure-your-business-logic-right-7a0)

## Related

+ [Anemic Domain Model](anemic-domain-model.html)
+ [Domain Design Driven (DDD)](ddd.html)
+ [Domain](domain.html)
+ [Value Object](value-object.html)
+ [Event Sourcing](event-sourcing.html)
+ [OOP (Object Oriented Programming)](oop.html)
