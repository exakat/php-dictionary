# Anemic Domain Model
The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects contain only data, getters, setters, and no business logic. All business logic is instead placed in service classes that operate on these passive data containers.

The result is a structural inversion: the domain layer becomes a schema mirror, while service classes accumulate all the behaviour. This defeats the purpose of object-oriented design, where objects encapsulate both state and the operations that depend on that state.

The symptoms are recognisable: entities have only getters/setters, service classes are large and growing, business rules are scattered across multiple services, and the same validation or computation is duplicated in several places.

The alternative is the rich domain model, where entities enforce their own invariants, expose meaningful behaviour, and reject invalid state. This is the model advocated by Domain-Driven Design.

Anemic models often emerge from ORM-first design, where Doctrine or Eloquent entities are modelled around the database schema rather than the domain.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anemic-domain-model.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anemic-domain-model.html","name":"Anemic Domain Model","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:59 +0000","dateModified":"Tue, 11 Aug 2026 14:42:59 +0000","description":"The anemic domain model is an anti-pattern identified by Martin Fowler where domain objects contain only data, getters, setters, and no business logic","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Anemic Domain Model.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"anemic-domain-model"}]}]}</script>
```php
<?php

// Anemic: Order is a data bag; all logic in OrderService
class Order {
    public int    $id;
    public string $status;
    public float  $total;
    public array  $items = [];
}

class OrderService {
    public function ship(Order $order): void {
        if ($order->status !== 'paid') {          // business rule in service
            throw new \LogicException('...');
        }
        $order->status = 'shipped';               // service mutates the entity
        $this->repository->save($order);
    }
}

// Rich: Order enforces its own invariants
class Order {
    private string $status = 'new';

    public function ship(): void {
        if ($this->status !== 'paid') {           // rule lives in the entity
            throw new \DomainException('Order must be paid before shipping.');
        }
        $this->status = 'shipped';
        $this->record(new OrderShipped($this->id));
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Anemic_domain_model)**
## See Also

+ [Rich vs Anemic Entities in PHP with Doctrine: How to Structure Your Business Logic Right](https://dev.to/mykola_vantukh/rich-vs-anemic-entities-in-php-how-to-structure-your-business-logic-right-7a0)
+ [Martin Fowler: Anemic Domain Model](https://martinfowler.com/bliki/AnemicDomainModel.html)

## Related

+ [Rich Domain Model](rich-domain-model.html)
+ [Domain Design Driven (DDD)](ddd.html)
+ [Domain](domain.html)
+ [OOP (Object Oriented Programming)](oop.html)
+ [Layered Architecture](layered-architecture.html)
